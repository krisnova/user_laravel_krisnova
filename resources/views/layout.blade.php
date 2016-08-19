<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Modal | Onsen UI</title>






    <link rel="stylesheet" href="{{URL::asset('lib/onsen/css/onsenui.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/onsen/css/onsen-css-components.css')}}">


      <script type="text/javascript" src="{{URL::asset('lib/onsen/js/onsenui.js')}}"></script>

          <style>
              ons-splitter-side[side="left"] {
              border-right: 1px solid #ddd;
              }

              ons-splitter-side[side="right"] {
              border-left: 1px solid #ddd;
              }
          </style>
          <script>
              function toggle(side) {
              var side = document.querySelector('ons-splitter-side[side="' + side + '"]');

              side.toggle();
              }
          </script>


</head>


  <body>

  <ons-splitter>
      <ons-splitter-side side="left" swipeable collapse="portrait" width="200px">
      <ons-page>
        <ons-toolbar>
          <div class="center">content</div>
        </ons-toolbar>

      </ons-page>
    </ons-splitter-side>

    <ons-splitter-content>
      <ons-page>
        <ons-toolbar>
          <div class="center">ons-splitter-content</div>
        </ons-toolbar>

        <p style="padding: 10px 20px;">
          <ons-button onclick="toggle('left')">toggle left menu</ons-button>
        </p>

        <p style="padding: 10px 20px;">
          <ons-button onclick="toggle('right')">toggle right menu</ons-button>
        </p>

          @yield('content')


          <div style="padding: 10px">
              <h3>Equally spaced</h3>

              <ons-row>
                  <ons-col>uno</ons-col>
                  <ons-col>dos</ons-col>
              </ons-row>

              <p></p>

              <ons-row>
                  <ons-col>Col</ons-col>
                  <ons-col>Col</ons-col>
                  <ons-col>Col</ons-col>
              </ons-row>


          <p></p>
              <ons-row>
                  <ons-col>1</ons-col>
                  <ons-col>2</ons-col>
                  <ons-col>3</ons-col>
                  <ons-col>4</ons-col>
              </ons-row>

          </div>

      </ons-page>
    </ons-splitter-content>

    <ons-splitter-side side="right" width="300px" collapse swipeable threhold-ratio-should-open="0.4">
      <ons-page>
        <ons-toolbar>
          <div class="left">
            <ons-toolbar-button onclick="toggle('right')">Close</ons-toolbar-button>
          </div>

          <div class="center">ons-splitter-side</div>
        </ons-toolbar>

      </ons-page>
    </ons-splitter-side>
  </ons-splitter>

  </body>
</html>
