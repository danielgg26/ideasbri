<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Carousel items -->
        <div class="carousel-inner">

          <!--Moda-->
          <div class="active item" align="center">
            <a href="comida/#">
              <img src="{{asset('librerias/img/slide.jpg')}}" alt="Slide 1">
            </a>
      		  <div class="carousel-caption">
              <h2>{{$comida->titulo}}</h2>
              <p>resumen</p>
            </div>
          </div>

          <!--Hogar-->
          <div class="item" align="center">
            <a href="hogar/#">
              <img src="{{asset('librerias/img/slide.jpg')}}" alt="Slide 2" align="center">
            </a>
            <div class="carousel-caption">
              <h2><?php //echo $rowh['titulo'] ?></h2>
              <p><?php //echo $rowh['resumen'] ?></p>
            </div>
          </div>

          <!--Comida-->
          <div class="item" align="center">
            <a href="comida-<?php //echo $rowc['id_comida'];?>-<?php //echo $urlamic;?>.html">
              <img src="{{asset('librerias/img/slide.jpg')}}" alt="Slide 3" align="center">
            </a>
            <div class="carousel-caption">
              <h2><?php //echo $rowc['titulo'] ?></h2>
              <p><?php //echo $rowc['resumen'] ?></p>
            </div>
          </div>

          <!--Salud-->
          <div class="item" align="center">
            <a href="salud-<?php //echo $rows['id_salud'];?>-<?php //echo $urlamis;?>.html">
              <img src="{{asset('librerias/img/slide.jpg')}}" alt="Slide 4" align="center">
            </a>
            <div class="carousel-caption">
              <h2><?php //echo $rows['titulo'] ?></h2>
              <p><?php //echo $rows['resumen'] ?></p>
            </div>
          </div>

          <!--Tecnología-->
          <div class="item" align="center">
            <a href="tecnologia-<?php //echo $rowt['id_tecnologia'];?>-<?php //echo $urlamit;?>.html">
              <img src="{{asset('librerias/img/slide.jpg')}}" alt="Slide 5" align="center">
            </a>
            <div class="carousel-caption">
              <h2><?php //echo $rowt['titulo'] ?></h2>
              <p><?php //echo $rowt['resumen'] ?></p>
            </div>
          </div>
        </div>
    
        <!-- Carousel nav -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
{!!Html::script('librerias/js/bootstrap.min.js')!!}

<script type="text/javascript">
  $("#myCarousel").carousel({
  interval: 5000
  });
</script>