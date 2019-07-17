jQuery(function ($) {

    var progressBar = document.querySelector(".scroll-progress__bar");

    function getPercentage(dividend, divisor) {
        return dividend / divisor * 100 + "%";
    }
    
    function updateProgress() {
        var scrollableHeight = document.body.clientHeight - window.innerHeight;
        var currentProgress = getPercentage(window.pageYOffset, scrollableHeight);
        progressBar.style.width = currentProgress;
    }
    
    document.addEventListener("scroll", updateProgress);
    window.addEventListener("resize", updateProgress);
    
    
});
