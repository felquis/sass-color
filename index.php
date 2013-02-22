<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Sass Mixin Colors preview</title>
  <meta name="description" content="Escolha uma cor usando as funções de cores do Sass">
  <meta property="og:title" content="Escolha uma cor usando as fun&#xe7;&#xf5;es de cores do Sass" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://tutsmais.com.br/sass-color/" />
  <meta property="og:image" content="http://tutsmais.com.br/sass-color/assets/img/sass_logo.gif" />
  <meta property="og:site_name" content="TutsMais" />
  <meta property="fb:admins" content="100001345144139" />

  <link rel="stylesheet" href="assets/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=296543393807328";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <div class="container hidden">
    <div class="row">
      <div class="span12">
        <textarea placeholder="Sass Code..." id="code"></textarea>
        <a href="#" title="Click here to compile" id="compile">Click here to compile</a>
      </div>
    </div>
    <hr>
  </div>

  <div class="container">
    <div class="row">
      <div class="span7">
        <h1>Teste de funções de cores do Sass</h1>
        <p>Escolha uma cor e veja as variações que consegue obter com ela</p>
      </div>
      <div class="span5">
        <div class="fb-like" data-href="http://tutsmais.com.br/sass-color/" data-send="false" data-layout="button_count" data-width="110" data-show-faces="false"></div>

        <!-- Place this tag where you want the +1 button to render. -->
        <div class="g-plusone" data-href="http://tutsmais.com.br/sass-color/"></div>

        <!-- Place this tag after the last +1 button tag. -->
        <script type="text/javascript">
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>

        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://tutsmais.com.br/sass-color/" data-text="Ferramenta para testar as funções manipulação de cores do Sass" data-via="felquis" data-related="felquis">Tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
    </div>

    <div class="row">
      <div class="span12">
        Eu escolho: $color = <input type="color" value="#FF005A" placeholder="#000000" id="my-color" /> <button id="button-pronto">Pronto</button>
      </div>
    </div>

    <div class="row">
      <div class="span12">

      Resultados:

        <ul class="colors-container">
          <li class="lighten item-container" data-function-name="lighten">
            lighten($color, <input class="number-input" type="number" max="100" min="0" value="10" title="Ex: 10%"/>%) = <span class="color-result">#000000</span>
          </li>
          <li class="darken item-container" data-function-name="darken">
            darken($color, <input class="number-input" type="number" max="100" min="0" value="20" title="Ex: 10%"  />%) = <span class="color-result">#000000</span>
          </li>
          <li class="desaturate item-container" data-function-name="desaturate">
            desaturate($color, <input class="number-input" type="number" max="100" min="0" value="40" title="Ex: 10%" />%) = <span class="color-result">#000000</span>
          </li>
          <li class="saturate item-container" data-function-name="saturate">
            saturate($color, <input class="number-input" type="number" max="100" min="0" value="30" title="Ex: 10%" />%) = <span class="color-result">#000000</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="row">
      <h2>Sobre este teste</h2>

      <p>Atualmente só tem suporte a três tipos básicos de tranformação de cores, lighten, darken, desaturate e saturate.</p>

      <p>Existe outras funções de cores que irei colocar aqui no futuro</p>

      <p>Eu criei isso por que para mim era difícil escolher uma cor para usar usando as funções de cores do Sass.</p>

      <p>O código disso esta bem porco, e pretendo melhora-lo também.</p>

      <h3>Agradecimento especial</h3>

      <p>A <a href="http://davidwalsh.name/basic-php-file-handling-create-open-read-write-append-close-delete" title="este post" target="_blank">este post</a> do David Walsh que mostra como criar arquivos com PHP, a <a href="http://sass-lang.com/docs/yardoc/Sass/Script/Functions.html" title="documentação do Sass" target="_blank">documentação do Sass</a> que tem a descrição de cada função,
      ao <a href="http://www.phpsass.com/" title="projeto PHPSass" target="_blank">projeto PHPSass</a> que permite compilar Sass com PHP.</p>
    </div>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
  <script src="assets/js/script.js"></script>

  <script>
    var _gaq=[['_setAccount','UA-23934923-8'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>