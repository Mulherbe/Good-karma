
@section('content2')

<div class="color_tim">
<ul class="timeline">
  <!-- Item 1 -->
  <div class="direction-l text-tm" > La Guadeloupe (en créole guadeloupéen : Gwadloup2) est un archipel des Caraïbes constitué de sept îles, formant une région et un département d'outre-mer français. La partie principale en forme de papillon (Karukera en langues amérindiennes3) est composée de deux îles : la Grande-Terre à l'est et la Basse-Terre à l'ouest, séparées par un bras de mer, « la Rivière-Salée ».</div>
  <li>

    <div class="direction-r">
      <div class="flag-wrapper">
    </div>
        <span class="hexa"></span>

        <span class="time-wrapper"><span class="time">Good Karma</span></span>

<div class='lol'>

   <img  class="image_timeline" src="
        {{ asset('images/goodkarma1.jpg') }}">



    </div>
</li>

  <!-- Item 2 -->
  <li>
    <div class="direction-l">
      <div class="flag-wrapper">
        <span class="hexa"></span>

        <span class="time-wrapper"><span class="time">La Guadeloupe</span></span>
      </div>
      <div class="desc"><img  class="image_timeline" src="
        {{ asset('images/test.jpg') }}"></div>
    </div>
  </li>

  <!-- Item 3 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="hexa"></span>

        <span class="time-wrapper"><span class="time">Autres</span></span>
      </div>
      <div class="desc"><img  class="image_timeline" src="
        {{ asset('images/test2.jpg') }}"></div>
    </div>
  </li>
</ul>
@endsection
