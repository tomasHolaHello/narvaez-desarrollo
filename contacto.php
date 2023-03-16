<?php $title = "Narvaez Desarrollos | Contacto"; ?>
<?php $description = "Líderes en maximización de activos inmobiliarios."; ?>
<?php $keywords = ""; ?>
<?php $selected = "contacto"; ?>
<?php include('header.php');?>


<div class="block mt-5 pb-0" data-scroll-reveal="enter bottom and move 20px">
  <div class="container mt-5 txt-black">
      <div class="row">
        <div class="col-sm-12 mb-4">
          <div class="row v-align-only-lg">
            <div class="col-md-6">
              <h2 class="mb-2">Contacto</h2>
            </div>
            <div class="col-md-6">
              <p class="text-right mb-0 lead visible-lg visible-md">Servicio profesional, ético y transparente de desarrollos inmobiliarios.</p>
              <p class="mb-0 lead visible-xs visible-sm">Servicio profesional, ético y transparente de desarrollos inmobiliarios.</p>
            </div>
          </div>
          <hr class="my-3">
        </div>
        </div>
        <div class="row mt-5">
        <div class="col-sm-5">
          <div class="row">
            <div class="col-sm-12 mb-5">
              <p class="mb-3 lead">Teléfonos</p>
              <ul class="list-unstyled my-3">
                <li><h3>+54 11 4743 2090<h3></li>
                <li><h3>+54 9 11 2829 9141<h3></li>
              </ul>
              <a itle="Narvaez Desarrollos | Llamanos" href="#" class="btn btn-primary btn-framed"><i class="m-r fa fa-phone" aria-hidden="true"></i> Llamanos</a>
            </div>
            <div class="col-sm-12 my-5">
              <p class="mb-3 lead">E-mail</p>
              <ul class="list-unstyled my-3">
                <li><h3>recepcion@narvaez.com.ar<h3></li>
              </ul>
            </div>
            <div class="col-sm-12 my-5">
              <p class="mb-3 lead">Ubicación</p>
              <ul class="list-unstyled my-3">
                <li><h3>Primera Junta 524 esq. Av. del Libertador, San Isidro, Buenos Aires, Argentina.<h3></li>
              </ul>
              <a title="Narvaez Desarrollos | Google Maps" href="compania" class="btn btn-primary btn-framed">Google Maps <i class="fa fa-long-arrow-right m-l" aria-hidden="true"></i></a>
            </div>
        </div>
      </div>

      <hr class="visible-xs visible-sm pt-3 pb-5">

      <div class="col-sm-7">
        <p class="mb-3 lead">Desarrolla e invertí con nosotros</p>
        <p class="mb-5">Conocé las diversas formas de sumarte a nuestros proyectos, aportando tierra o capital.</p>

        <form role="form" id="form-contact" method="post" class="clearfix inputs-underline">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Nombre *" required>
                    </div>
                    <!--end form-group -->
                </div>
                <!--end col-md-6 col-sm-6 -->
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="E-mail *" required>
                    </div>
                    <!--end form-group -->
                </div>
                <!--end col-md-6 col-sm-6 -->
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input type="tel" class="form-control" id="form-contact-phone" name="phone" placeholder="Teléfono *" required>
                    </div>
                    <!--end form-group -->
                </div>
                <!--end col-md-6 col-sm-6 -->
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="form-contact-subject" name="subject" placeholder="Asunto">
                    </div>
                    <!--end form-group -->
                </div>
            </div>
            <!--end row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" id="form-contact-message" rows="9" name="message" placeholder="Mensaje *" required></textarea>
                    </div>
                    <!--end form-group -->
                </div>
                <!--end col-md-12 -->
            </div>
            <!--end row -->
            <div class="form-group clearfix">
                <button type="submit" class="btn btn-primary btn-framed pull-right" id="form-contact-submit">Enviar <i class="fa fa-long-arrow-right m-l" aria-hidden="true"></i></button>
            </div>
            <!--end form-group -->
            <div id="form-contact-status"></div>
        </form>


      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
