
$(window).load(function(){
  var timespan = countdown(new Date(), new Date(2017, 08, 08),  countdown.SECONDS);
console.log(timespan);

var clock = $('.your-clock').FlipClock(timespan.seconds, {
countdown:true,
clockFace: 'DailyCounter'
});
  
})