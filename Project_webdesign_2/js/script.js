$('#search').keyup(function() {
  var searchField = $(this).val();
  console.log(searchField);
  var myExp = new RegExp(searchField, "i");
  var output = '';
  if ($.trim(searchField) != '') {
    $.getJSON('js/data.json', function(data) {
      output = '<ul class="seachresults">';
      $.each(data, function(key, val) {
        if ((val.name.search(myExp) != -1) || (val.company.search(myExp) != -1)) {
          output += '<li>';
          output += '<h2>' + val.name + '</h2>';
          output += '<img src="images/' + val.shortname + '_tn.png" alt="' + val.name + '" />';
          output += '<p>' + val.description + '</p>';
          output += '<h2>' + val.company + '</h2>';
          output += '<h2>' + val.price + '</h2>';
          output += '</li>';
        }
      });
      output += '</ul>';
      $('#update').html(output);
    });
  }
  $('#update').html(output);
});
