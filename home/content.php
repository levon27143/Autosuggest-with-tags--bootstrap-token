<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <input type="text" class="form-control uniq" id="tokenfield" value="red,green,blue" />        
      <input type="text" class="form-control uniq" id="tokenfield" value="" /> 
      </div> 

    </div>
</div>


<script type="text/javascript">

$('#tokenfield').tokenfield({
  autocomplete: {
    source: ['red','blue','green','yellow','violet','brown','purple','black','white'],
    delay: 100
  },
  showAutocompleteOnFocus: true
})

$('#tokenfield').on('tokenfield:createtoken', function (event) {
    var existingTokens = $(this).tokenfield('getTokens');
    $.each(existingTokens, function(index, token) {
        if (token.value === event.attrs.value)
            event.preventDefault();
    });
});

</script>