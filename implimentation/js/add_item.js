<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<script language="javascript">
  function check()
  {
   if(document.getElementById("txt_id").value =="")
   {
    alert('Please Enter The Product Id !!'); 
    document.getElementById("txt_id").focus();
    return false;
   }
   if(document.getElementById("txt_name").value =="")
   {
     alert('Please Enter Brand Name !!'); 
    document.getElementById("txt_name").focus();
    return false;
   }
   if(document.getElementById("txt_size").value =="")
   {
    alert('Please Enter the Product Name !!'); 
    document.getElementById("txt_size").focus();
    return false;
   }
   if(document.getElementById("txt_pro").value =="")
   {
    alert('Please Enter The Product Price!'); 
    document.getElementById("txt_pro").focus();
    return false;
   }
 if(document.getElementById("txt_fname").value =="")
   {
     alert('Please Enter The Product Descripation !!'); 
    document.getElementById("txt_fname").focus();
    return false;
   }
   
   
   
   if(document.getElementById("select").value =='--select--')
   {
     alert('Please Select The Status !!'); 
    document.getElementById("select").focus();
    return false;
   }
  
 if(document.getElementById("fileimage").value =="")
   {
     alert('Please Browse The Product Image !!'); 
    document.getElementById("fileimage").focus();
    return false;
   }
  
  }
 </script>	