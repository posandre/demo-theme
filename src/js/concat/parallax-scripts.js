jQuery(document).ready(function ($) {
  const parallaxSections = $('.parallax-section');
  if (parallaxSections.length > 0) {
    const windowHeight = $(window).outerHeight();

    parallaxSections.each(function () {
      let $currentSection = $(this);
      let $currentSectionEmpty = $(this).prev();
      let $nextSection = $currentSection.next();
      if ($nextSection.length > 0) {
        if ($nextSection.next('.parallax-section__empty').length > 0) {
          $nextSection.addClass('full-height');
        }
        $currentSectionEmpty.css('height', $currentSection.outerHeight());
      }
    });
    $(window).on('scroll', function () {
      let $currentScrollPos = window.pageYOffset || document.documentElement.scrollTop;
      parallaxSections.each(function () {
        let $currentSection = $(this);
        let $currentSectionEmpty = $currentSection.prev();
        let $topPosition = $currentSectionEmpty.position()['top'] - windowHeight;
        let $bottomPosition = $currentSectionEmpty.position()['top'];

        if (!$currentSection.next().hasClass('parallax-section__empty')) {
          $bottomPosition += windowHeight;
        }
        if ($currentScrollPos > $topPosition && $currentScrollPos < $bottomPosition) {
          $currentSection.removeClass('hidden').removeClass('hide-animation');
        } else {
          $currentSection.addClass('hidden').addClass('hide-animation');
        }
      });
    });
  }
});