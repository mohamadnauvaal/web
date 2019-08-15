jQuery(document).ready(function ($) {	
	var district = '<div class="form-group row "><label class="col-md-3 form-control-label required">'+District+'</label><div class="col-md-6"><select class="form-control form-control-select" name="id_district" id="id_district"></select></div></div>';
	var subDistrict = '<div class="form-group row "><label class="col-md-3 form-control-label required">'+SubDistrict+'</label><div class="col-md-6"><select class="form-control form-control-select" name="id_subdistrict" id="id_subdistrict"></select></div></div>';
	
	$('select[name=\'id_state\']').parent().parent().after(district);
	$('#id_district').parent().parent().after(subDistrict);

  if (district_list) {
    $('select[name=\'id_district\']').append(district_list);
    $('input[name=\'city\']').parent().parent().hide();
  }

  if (subdistrict_list) {
    $('select[name=\'id_subdistrict\']').append(subdistrict_list);
  }  	
	
	$(document).on('change', 'select[name=\'id_district\']', function(e){
		loadCity($('select[name=\'id_district\']').val());
	});

	$(document).on('change', 'select[name=\'id_subdistrict\']', function(e){
		$('input[name=\'city\']').val($('select[name=\'id_subdistrict\'] option:selected').text()+', '+$('select[name=\'id_district\'] option:selected').text()+', '+$('select[name=\'id_state\'] option:selected').text());
	});	

	$(document).on('change', 'select[name=\'id_state\']', function(e){
		if ($("select[name=\'id_country\']").val() == 111) {
			loadDistrict($("select[name=\'id_state\']").val());
		}
	});

	$(document).on('change', '#id_country', function(e){
		if ($("select[name=\'id_country\']").val() == 111) {
			$('select[name=\'id_district\']').parent().parent().show();
			$('select[name=\'id_subdistrict\']').parent().parent().show();
			$('input[name=\'city\']').parent().parent().hide();
		} else {
			$('select[name=\'id_district\']').empty();
			$('select[name=\'id_district\']').parent().parent().hide();
			$('select[name=\'id_subdistrict\']').empty();
			$('select[name=\'id_subdistrict\']').parent().parent().hide();
			$('input[name=\'city\']').parent().parent().show();
		}
	});	
});

function loadDistrict(state)
{
	if (state) {
	    $.ajax({
			type: 'POST',
			url: kurirq_ajax_url,
			cache: 'true',
			data: {'a':'district', 'q': state, 'token': kurirq_token},
			dataType: 'json',
	        type: 'POST',
	        success: function(data) {
	        	if (data.length > 0) {
					$('select[name=\'id_district\']').empty();
					$.each(data, function (i, object) {
						$('select[name=\'id_district\']').append($('<option></option>').val(data[i].id).html(data[i].name));
					});
					loadCity($('select[name=\'id_district\']').val());
	        	}
	        }
	    });		
	} else {
		$('select[name=\'id_district\']').empty();
		$('select[name=\'id_subdistrict\']').empty();
	}
}

function loadCity(district)
{
    $.ajax({
		type: 'POST',
		url: kurirq_ajax_url,
		cache: 'true',
		data: {'a':'city', 'q': district, 'token': kurirq_token},
		dataType: 'json',
        type: 'POST',
        success: function(data) {
        	if (data.length > 0) {
				$('#id_subdistrict').empty();
				$.each(data, function (i, object) {
					$('select[name=\'id_subdistrict\']').append($('<option></option>').val(data[i].id).html(data[i].name));
				});
				$("select[name=\'id_subdistrict\'] option:first").attr('selected','selected');
				$('input[name=\'city\']').val($('select[name=\'id_subdistrict\'] option:selected').text()+', '+$('select[name=\'id_district\'] option:selected').text()+', '+$('select[name=\'id_state\'] option:selected').text());
        	}
        }
    });
}