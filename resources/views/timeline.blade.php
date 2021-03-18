
@section('content2')
<style>


@import url(https://fonts.googleapis.com/css?family=Raleway:400,900);

.color_tim{
  font-family: 'Raleway', sans-serif;
  background-color: white;
}

.hexa{
  border: 0px;
  float: left;
  text-align: center;
  height: 35px;
  width: 60px;
  font-size: 22px;
  background: #f0f0f0;
  color: #3c3c3c;
  position: relative;
  margin-top: 15px;
}

.hexa:before{
  content: "";
  position: absolute;
  left: 0;
  width: 0;
  height: 0;
  border-bottom: 15px solid #f0f0f0;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  top: -15px;
}

.hexa:after{
  content: "";
  position: absolute;
  left: 0;
  width: 0;
  height: 0;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  border-top: 15px solid #f0f0f0;
  bottom: -15px;
}

.timeline {
  position: relative;
  padding: 0;
  width: 100%;
  margin-top: 20px;
  list-style-type: none;
}

.timeline:before {
  position: absolute;
  left: 50%;
  top: 0;
  content: ' ';
  display: block;
  width: 2px;
  height: 100%;
  margin-left: -1px;
  background: rgb(213,213,213);
  background: -moz-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(125,185,232,1)));
  background: -webkit-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -o-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -ms-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: linear-gradient(to bottom, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  z-index: 5;
}

.timeline li {
  padding: 2em 0;
}

.timeline .hexa{
  width: 16px;
  height: 10px;
  position: absolute;
  background: #3d8105;
  z-index: 5;
  left: 0;
  right: 0;
  margin-left:auto;
  margin-right:auto;
  top: -30px;
  margin-top: 0;
}

.timeline .hexa:before {
  border-bottom: 4px solid #3d8105;
  border-left-width: 8px;
  border-right-width: 8px;
  top: -4px;
}

.timeline .hexa:after {
  border-left-width: 8px;
  border-right-width: 8px;
  border-top: 4px solid #3d8105;
  bottom: -4px;
}

.direction-l,
.direction-r {
  float: none;
  width: 100%;
  text-align: center;
}


.direction-l .flag:after,
.direction-r .flag:after {
  content: "";
  position: absolute;
  left: 50%;
  top: -15px;
  height: 0;
  width: 0;
  margin-left: -8px;
  border: solid transparent;
  border-bottom-color: rgb(255,255,255);
  border-width: 8px;
  pointer-events: none;
}

.direction-l .flag {
  -webkit-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.direction-r .flag {
  -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.time-wrapper {
  display: block;
  position: relative;
  margin: 4px 0 0 0;
  z-index: 14;
  line-height: 1em;
  vertical-align: middle;
  color: #fff;
}

.direction-l .time-wrapper {
  float: none;
}

.direction-r .time-wrapper {
  float: none;
}

.time {

  background: #3d8105;
  display: inline-block;
  padding: 8px;
}

.desc {
  position: relative;
  margin: 1em 0 0 0;
  padding: 1em;

  -webkit-box-shadow: 0 0 1px rgba(0,0,0,0.20);
  -moz-box-shadow: 0 0 1px rgba(0,0,0,0.20);
  box-shadow: 0 0 1px rgba(0,0,0,0.20);
  z-index: 15;
}

.direction-l .desc,
.direction-r .desc {
  position: relative;
  margin: 1em 1em 0 1em;
  padding: 1em;
  z-index: 15;
}

@media(min-width: 768px){
  .timeline {
    width: 660px;
    margin: 0 auto;
    margin-top: 20px;
  }

  .timeline li:after {
    content: "";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
  }

  .timeline .hexa {
    left: -28px;
    right: auto;
    top: 8px;
  }

  .timeline .direction-l .hexa {
    left: auto;
    right: -28px;
  }

  .direction-l {
    position: relative;
    width: 310px;
    float: left;
    text-align: right;
  }

  .direction-r {
    position: relative;
    width: 310px;
    float: right;
    text-align: left;
  }

  .flag-wrapper {
    display: inline-block;
  }

  .flag {
    font-size: 18px;
  }

  .direction-l .flag:after {
    left: auto;
    right: -16px;
    top: 50%;
    margin-top: -8px;
    border: solid transparent;
    border-left-color: rgb(254,254,254);
    border-width: 8px;
  }

  .direction-r .flag:after {
    top: 50%;
    margin-top: -8px;
    border: solid transparent;
    border-right-color: rgb(254,254,254);
    border-width: 8px;
    left: -8px;
  }

  .time-wrapper {
    display: inline;
    vertical-align: middle;
    margin: 0;
  }

  .direction-l .time-wrapper {
    float: left;
  }

  .direction-r .time-wrapper {
    float: right;
  }

  .time {
    padding: 5px 10px;
  }

  .direction-r .desc {
    margin: 1em 0 0 0.75em;
  }
}

@media(min-width: 992px){
  .timeline {
    width: 800px;
    margin: 0 auto;
    margin-top: 20px;
  }

  .direction-l {
    position: relative;
    width: 380px;
    float: left;
    text-align: right;
  }

  .direction-r {
    position: relative;
    width: 380px;
    float: right;
    text-align: left;
  }
}
.image_timeline_r{
    width: 700px;
}
.image_timeline_l{
    width: 700px;
    padding-right: 300px;
}


.imagetest{
    height: 50vh;
    transition: 10000s;
    width: 1500px;

}

.imagetest:hover{
    margin-left: -900px;
    transition-duration: 1s;
}
.text_abso{
    position: absolute;
    margin-top:100px;
    margin-left:100px;
    width: 600px;
    font-size: 20px;
}
.left_img{
    margin-right: 150px;
}
</style>
<div class="color_tim">
<ul class="timeline">
  <!-- Item 1 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="hexa"></span>

        <span class="time-wrapper"><span class="time">Good Karma</span></span>
      </div>


      <div class="text_abso"> La Guadeloupe (en créole guadeloupéen : Gwadloup2) est un archipel des Caraïbes constitué de sept îles, formant une région et un département d'outre-mer français. La partie principale en forme de papillon (Karukera en langues amérindiennes3) est composée de deux îles : la Grande-Terre à l'est et la Basse-Terre à l'ouest, séparées par un bras de mer, « la Rivière-Salée ».</div>
<div class="imagetest">
      <div class="desc"> <img  class="image_timeline_r" src="
        {{ asset('images/goodkarma1.jpg') }}"></div>
      </div>
</div>
  </li>

  <!-- Item 2 -->
  <li>
    <div class="direction-l ">
      <div class="flag-wrapper">
        <span class="hexa"></span>

        <span class="time-wrapper"><span class="time">Guadeloupe</span></span>
      </div>


      <div class="text_abso"></div>

            <div class="desc"> <img  class="image_timeline_r" src="
            {{ asset('images/test.jpg') }}"></div>

</div>

  </li>

  <!-- Item 3 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="hexa"></span>

        <span class="time-wrapper"><span class="time">Good Karma</span></span>
      </div>


      <div class="text_abso"> La Guadeloupe (en créole guadeloupéen : Gwadloup2) est un archipel des Caraïbes constitué de sept îles, formant une région et un département d'outre-mer français. La partie principale en forme de papillon (Karukera en langues amérindiennes3) est composée de deux îles : la Grande-Terre à l'est et la Basse-Terre à l'ouest, séparées par un bras de mer, « la Rivière-Salée ».</div>
<div class="imagetest">
      <div class="desc"> <img  class="image_timeline_r" src="
        {{ asset('images/test2.jpg') }}"></div>
      </div>
</div>
  </li>
 <!-- Item 4-->
 <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="hexa"></span>

        <span class="time-wrapper"><span class="time">Good Karma</span></span>
      </div>


      <div class="text_abso"> La Guadeloupe (en créole guadeloupéen : Gwadloup2) est un archipel des Caraïbes constitué de sept îles, formant une région et un département d'outre-mer français. La partie principale en forme de papillon (Karukera en langues amérindiennes3) est composée de deux îles : la Grande-Terre à l'est et la Basse-Terre à l'ouest, séparées par un bras de mer, « la Rivière-Salée ».</div>
<div class="imagetest">
      <div class="desc"> <img  class="image_timeline_r" src="
        {{ asset('images/test2.jpg') }}"></div>
      </div>
</div>
  </li>

</ul>
@endsection