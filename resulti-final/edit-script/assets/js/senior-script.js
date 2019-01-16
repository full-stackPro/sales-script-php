$(function() {
	
	//----- OPEN
	$('[data-popup-open]').on('click', function(e) {
		var targeted_popup_class = jQuery(this).attr('data-popup-open');
		$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
		var clone_ele = $(this).parent().find('.ui-sortable-handle').first(true).clone();
		//$(this).parent().append(clone_ele);
		console.log(clone_ele);
		var ul = $(this).closest('ul');
		var ul_id = ul.attr('id');
		clone_ele.find('.buttons').attr("id", "newelement").css("marginLeft","5px");
		clone_ele.insertBefore($(this));
		$('[data-popup="' + targeted_popup_class + '"]').find("#clickded").remove();
		$('[data-popup="' + targeted_popup_class + '"]').find("#clickded_id").remove();
        $('<input type="hidden" id="clickded" value="newelement" />').insertBefore('#submitbtn');
        $('<input type="hidden" id="clickded_id" value="'+ul_id+'" />').insertBefore('#submitbtn');
		e.preventDefault();
	});

	//----- CLOSE
	$('[data-popup-close]').on('click', function(e) {
		var targeted_popup_class = jQuery(this).attr('data-popup-close');
		$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

		e.preventDefault();
	});
});
$( function() {
	$('.list_sortable').sortable({
		items: ':not(.static)',
		start: function(){
			$('.static', this).each(function(){
				var $this = $(this);
				$this.data('pos', $this.index());
			});
		},
		change: function(){
			$sortable = $(this);
			$statics = $('.static', this).detach();
			$helper = $('<li></li>').prependTo(this);
			$statics.each(function(){
				var $this = $(this);
				var target = $this.data('pos');
				
				$this.insertAfter($('li', $sortable).eq(target));
			});
			$helper.remove();
		}
	});
	$(".inline-buttons").sortable({
		containment: 'parent',
		cursor:'move'   
	});
	
} );


	  


$(document).ready(function() {
	
	$(':input[type="submit"]').prop('disabled', true);
    $('input[type="text"]').keyup(function() { 
	   console.log($(this));
        if($("#btn-id").val() != '' && $('#btn-title').val() != '' && $("#section-des").val() != '<div><br></div>') {
           $(':input[type="submit"]').prop('disabled', false);
        }else{
			$(':input[type="submit"]').prop('disabled', true);
		}
     });
	
	$(document).on("keyup keydown change blur paste copy cut", ".richText-editor", function() {
		console.log($(this).val());
		if($("#btn-id").val() != '' && $('#btn-title').val() != '' && $("#section-des").val() != '<div><br></div>') {
			$(':input[type="submit"]').prop('disabled', false);
		}else{
			$(':input[type="submit"]').prop('disabled', true);
		}

	});
	//change Foreground Color 
	$('.coloselector').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			 console.log($(el));
			$(el).css("background-color","#"+hex);
			$(el).parent().siblings().find(".buttons").css("color","#"+hex);
			$(el).ColorPickerHide();
		}
	});
	// Change Background Color
	$('.bgcolorselector').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			 console.log($(el));
			$(el).css("background-color","#"+hex);
			$(el).parent().siblings().find(".buttons").css("background-color","#"+hex);
			$(el).ColorPickerHide();
		}
	});

	// Change Background Color
	$('.section-bg-colors').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			 console.log($(el));
			$(el).css("background-color","#"+hex);
			$(el).parent().css("background-color","#"+hex);
			$(el).ColorPickerHide();
		}
	});
	$('.section-colors').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			 console.log($(el));
			$(el).css("background-color","#"+hex);
			$(el).parent().css("color","#"+hex);
			$(el).parent().find('p,span,h1,h2,h3').css("color","#"+hex);
			$(el).ColorPickerHide();
		}
	});
	
	$("#addsection").submit(function(e){
		e.preventDefault();
		var title 		 = $("#btn-title").val();
		var id			 = $("#btn-id").val();
		var section_text = $("#section-des").val();
		var clickded_id  = $("#clickded_id").val();
		$("#newelement").text(title).append('<span class="fa fa-minus-circle del"></span>');
		$("#newelement").val(id);
		//$("#newelement").attr("id",id);
		if(clickded_id == 'excitement'){
			var html = '<div class="mainContent" id="'+id+'">'+section_text+'</div>';
			$("#topArea").append(html);
		}else{
			var html = '<div class="rebuttal" id="'+id+'">'+section_text+'</div>';
			$("#rebuttalArea").append(html);
		}
		
		setTimeout(function(){
			$(".popup-close").trigger("click");
		},600);
		
	});
	
	
	
	$('.text-editor').richText({
		// text formatting
		bold: true,
		italic: true,
		underline: true,

		// text alignment
		leftAlign: true,
		centerAlign: true,
		rightAlign: true,

		// lists
		ol: true,
		ul: true,

		// title
		heading: false,

		// fonts
		fonts: false,
		
		fontColor: true,
		fontSize: true,

		// uploads
		imageUpload: false,
		fileUpload: false,

		// media
		videoEmbed: false,

		// link
		urls: false,

		// tables
		table: false,

		// code
		removeStyles: false,
		code: true,

		// colors
		colors: [],

		// dropdowns
		fileHTML: '',
		imageHTML: '',

		
		// dev settings
		useSingleQuotes: false,
		height: 0,
		heightPercentage: 0,
		id: "",
		class: "",
		useParagraph: false
  
	});
	$('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
			
	$("#topArea a").click(function () {
	   var ref = $(this).attr('href');
		window.location.href = ref;
	});
	
	$("#closethis").click(function(){
		$(this).parent().hide();
	});
	
	$("#introPrompt a").click(function () {
	   var ref = $(this).attr('href');
		window.location.href = ref;
	});
	
	
	$('.editor').notebook({
		autoFocus: false,
		placeholder: 'Your text here...',
		mode: 'multiline', 
	});
	
	
	
	
	
	
	
	$(".inline-buttons").on('click','.buttons',function () {
	  var p= $("#"+this.value);
		p.toggle().siblings().hide();
		$(".section-title").remove();
		p.before('<span class="section-title">'+$(this).text()+'</span>');
		
		$(".inline-buttons").find('.buttons').css('opacity','1');
		$(this).css('opacity','0.7');
		
	});
		$(document).on('click','.del',function () {
		console.log($(this));
		var sec_id = $(this).parent().val();
		$(this).parent().parent().remove();
		$("#"+sec_id).remove();
		$(".section-title").remove();
	});
	
	
	
	$("#savechanges").click(function(e) {
		$(".ajax-response").empty().append("Updating current content...").show();
		e.preventDefault();
		var type = $(this).attr('type');
		$('<textarea class="text-editor" rows="5" id="section-des"></textarea>').insertBefore($(".richText"));
		$(".richText").remove();
		$(".fr-toolbar").remove();
		$(".colorpicker").remove();
		var data =  '<!DOCTYPE html>' + $('html')[0].outerHTML;
		jQuery.ajax({
		  url: 'save.php',
		  type : 'post',
		  dataType: "json",
		  data : {html:data,type:type},
		  success: function(data ) {
			if(data.msg =='success') {
				
				$(".ajax-response").empty().append("Updated successfully and save in sale-agent folder").show();
				setTimeout(function(){ jQuery('.ajax-response').text('').hide(); }, 500);
			  
			}else {
				$(".ajax-response").empty().append("There is problem in updating...").show();
				setTimeout(function(){ jQuery('.ajax-response').text('').hide(); }, 500);
				
			}
		  }
		});
	});
	
	$("#export").click(function(e) {
		$(".ajax-response").empty().append("Exporting Agent Version...").show();
		e.preventDefault();
		var type = $(this).attr('type');
		$('<textarea class="text-editor" rows="5" id="section-des"></textarea>').insertBefore($(".richText"));
		$(".richText").remove();
		$(".fr-toolbar").remove();
		$(".fa-plus-circle").remove();
		$(".bgcolorselector").remove();
		$(".coloselector").remove();
		$(".popup").remove();
		$(".colorpicker").remove();
		var data =  '<!DOCTYPE html>' + $('html')[0].outerHTML;
		jQuery.ajax({
		  url: 'export.php',
		  type : 'post',
		  dataType: "json",
		  data : {html:data,type:type},
		  success: function(data ) {
			if(data.msg =='success') { 
				
				$(".ajax-response").empty().append("Exported successfully and save in sale-agent folder").show();
				setTimeout(function(){ jQuery('.ajax-response').text('').hide();
		location.reload(); }, 500);
			  
			}else {
				$(".ajax-response").empty().append("There is problem in exporting...").show();
				setTimeout(function(){ jQuery('.ajax-response').text('').hide(); }, 500);
				
			}
		  }
		});
	});
});