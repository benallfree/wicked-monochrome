<?

W::register_filter('css', function($content, $files) {
  $config = W::$modules['coolbook'];
  $files[] = $config['vpath']."/assets/css/style.css";
  return $files;
});
