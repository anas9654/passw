$(function() {
  $("form[name='form']").validate({
    rules:{
      name:"required",
      email:{
        required: true,
        email:true
      },
      option:"required"
      },
      messages:{
        name: "please enter name first",
        email: "please enter valid email address",
        option:"please enter password length"
              },
      submitHandler: function(form){
        form.submit();
      }
      
    
  });
});