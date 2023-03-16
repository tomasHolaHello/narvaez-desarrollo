'use strict'

let aContactos = [];
let aChatBot = [];

var settings = {
  url: "https://api.clientify.net/v1/contacts/",
  method: "GET",
  timeout: 0,
  headers: {
    Authorization: "Token 250480051972986b4538c5a217919dca0ebda86b",
  },
};

$.ajax(settings).done(function (response) {
  aContactos = response.results;
  cargarContactos();
});

function cargarContactos() {
    for(let i = 0; i < aContactos.length; i++){
        if (aContactos[i].tags[i] == "chatbot"){
            aChatBot[i] = aContactos[i];
        }
    }
    var dato = localStorage.setItem('aChatBot', JSON.stringify(aChatBot));
    console.log("dato: ", aChatBot);
    createProducts(aChatBot[0].first_name);

}

function basicAuth(key, secret) {
    let hash = btoa(key + ":" + secret);
    return "Basic " + hash;
  }
  
let auth = basicAuth(consumer_key, consumer_secret);

function createProducts(dato) {
    let url = "http://tokkobroker.com/api/v1/webcontact/?key=57cb56cecd071cbcc7a3faeb064dd9fe178b01d9";
    $.ajax({
      url: url,
      method: "POST",
      dataType: "JSON",
      data: $.param(dato),
    }).done(function (msg) {
      console.log("Data Saved Create: ");
      console.log(msg);
    });
  }
