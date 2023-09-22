<?php
$video = get_field('video');
$poster_image = get_field('image');
$displayYouTubeEmbed = false;

if (preg_match('/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', $video, $matches)) {
    $youtubeVideoID = $matches[1];
    $displayYouTubeEmbed = true;
}
?>

<div class="max-w-full lg:w-10/12 relative mx-auto">
  <?php if ($displayYouTubeEmbed): ?>
    <div class="Video_container w-full max-w-full relative">
      <div class="js-embed-container w-full max-w-full" style="display: none">
        <iframe
          width="100%"
          height="100%"
          src="https://www.youtube.com/embed/<?php echo esc_attr($youtubeVideoID); ?>"
          frameborder="0"
          allow="autoplay"
        ></iframe>
      </div>
      <div class="Video_container__overlay js-video-overlay w-full max-w-full">
        <img class="w-full max-w-full rounded-3xl" src="<?php echo esc_url($poster_image['url']); ?>" alt="<?php echo esc_attr($poster_image['alt']); ?>">
          <div class="Video_container__playBtn js-overlay-play-button absolute">
            <svg xmlns="http://www.w3.org/2000/svg" width="141" height="141" viewBox="0 0 141 141" fill="none">
                <circle cx="70.578" cy="70.7694" r="64.6366" fill="#D0252B" fill-opacity="0.5"/>
                <circle cx="70.5261" cy="70.6316" r="46.5691" fill="#363895" fill-opacity="0.5"/>
                <circle cx="70.5264" cy="70.6357" r="38.6982" fill="#D0252B"/>
                <circle cx="70.526" cy="70.6393" r="46.7877" fill="#D0252B"/>
                <path d="M79.0527 71.6193L62.8192 80.9917L62.8192 62.2468L79.0527 71.6193Z" fill="white"/>
            </svg>
        </div>
      </div>
    </div>
    <?php elseif (!$video): ?>
      <div class="Video_container__overlay w-full relative">
          <img src="<?php echo esc_url($poster_image['url']); ?>" alt="<?php echo esc_attr($poster_image['alt']); ?>">
      </div>
    <?php endif; ?>
</div>
