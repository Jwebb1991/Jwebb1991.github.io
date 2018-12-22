  $(document).ready(function(){
  showQuote();


  $("#new-quote").on("click", function()
  {
    showQuote();
  });

  function showQuote () {
  var quotes = ['It is during our darkest moments that we must focus to see the light. ^Aristotle', 'Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment. ^Buddha', 'The only thing necessary for the triumph of evil is for good men to do nothing. ^Edmund Burke', 'Do not go where the path may lead, go instead where there is no path and leave a trail. ^Ralph Waldo Emerson', 'Success is not final, failure is not fatal: it is the courage to continue that counts. ^Winston Churchill', 'The pessimist complains about the wind; the optimist expects it to change; the realist adjusts the sails. ^William Arthur Ward', 'The only true wisdom is in knowing you know nothing. ^Socrates', 'All our dreams can come true, if we have the courage to pursue them. ^Walt Disney', 'When we are no longer able to change a situation - we are challenged to change ourselves. ^Viktor E. Frankl', 'The secret of getting ahead is getting started. ^Mark Twain', 'A leader is one who knows the way, goes the way, and shows the way. ^John C. Maxwell'
  ];


  var index = Math.floor(Math.random() * (quotes.length + 1));
  var entry = quotes[index];
  entry = entry.split('^');
  $("#quote-container").empty();
  $("#quote-container").html("<div><p id='text' class='quote'>" + entry[0] + "</p><p id='author' class='quote author text-primary mt-0 mb-2'>- " + entry[1] + "</p></div>")
}
});
