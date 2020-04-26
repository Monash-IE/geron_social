jQuery(document).ready(function($){
    
	$('.cfb-flip').each(function (){
		
        var effect=$(this).data('effect');
        $(this).flip({
        axis:effect,
        trigger: 'hover',
        front:'.cfb-front',
        back:'.cfb-back',
        autoSize:false
        });
	
	});

	$('.cfb-face a').on('touchstart',function(e){
		e.stopPropagation();
	})

	$('.cfb-flip').each(function(){ 
        
        $(this).on('touchstart', function(){
        $(this).flip('toggle'); 
        }); 
    
	});

   
     $('.cfb_wrapper').each(function(){
        var flipboxID=$(this).data('flipboxid');
       var maxDataHeight = 0;
       
		$('#'+flipboxID+' '+'.cfb-flip[data-height="equal"]'+' '+'.cfb-data').each(function(){
           if ($(this).height() > maxDataHeight) { 
               maxDataHeight = $(this).height();                
            }
		});
        
		$('#'+flipboxID+' '+'.cfb-flip[data-height="equal"]'+' '+'.cfb-data').height(maxDataHeight);

    });  

    var maxHeight = 0;
    var maxWidth = 0;
    
    $('.cfb-box-wrapper').each(function(){
        var $this = $(this);

        var frontHeight = $this.find('.cfb-front').height();
        var backHeight =  $this.find('.cfb-back').height();
        var frontWidth = $this.find('.cfb-front').width();
        var backWidth =  $this.find('.cfb-back').width();
        if (frontHeight > backHeight) { maxHeight = frontHeight; }
        else{
         maxHeight = backHeight;
        }
        if (frontWidth > backWidth) { maxWidth = frontWidth; }
        else{
            maxWidth = backWidth;
        }

        $this.find('.cfb-data').height(maxHeight); 

        $this.find('.cfb-data').width(maxWidth); 
  
    
    });
 
});

