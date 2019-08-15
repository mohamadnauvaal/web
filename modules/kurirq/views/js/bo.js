$(document).ready(function(){
	var district = '<div class="form-group" ><label class="control-label col-lg-3">'+District+'</label><div class="col-lg-4"><select name="id_district" class=" fixed-width-xxl" id="id_district"></select></div></div>';
	var subDistrict = '<div class="form-group" ><label class="control-label col-lg-3">'+SubDistrict+'</label><div class="col-lg-4"><select name="id_subdistrict" class=" fixed-width-xxl" id="id_subdistrict"></select></div></div>';

	$('#contains_states').after(district);
	$('#id_district').parent().parent().after(subDistrict);

	if (district_list) {
		$('#id_district').empty();
		$('#id_district').append(district_list);		
	}

	if (subdistrict_list) {
		$('#id_subdistrict').empty();
		$('#id_subdistrict').append(subdistrict_list);
	}

	$(document).on('change', '#id_district', function(e){
		loadCity($('#id_district').val());
	});

	$(document).on('change', '#id_subdistrict', function(e){
		$('#city').val($('#id_subdistrict option:selected').text()+', '+$('#id_district option:selected').text()+', '+$('#id_state option:selected').text());
	});

	$(document).on('change', '#id_state', function(e){
		if ($("#id_country").val() == 111) {
			loadDistrict($("#id_state").val());
		}
	});

	$(document).on('change', '#id_country', function(e){
		if ($("#id_country").val() == 111) {
			$('#id_district').parent().parent().show();
			$('#id_subdistrict').parent().parent().show();
		} else {
			$('#id_district').empty();
			$('#id_district').parent().parent().hide();
			$('#id_subdistrict').empty();
			$('#id_subdistrict').parent().parent().hide();
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
					$('#id_district').empty();
						$.each(data, function (i, object) {
						$('#id_district').append($('<option></option>').val(data[i].id).html(data[i].name));
					});
					loadCity($('#id_district').val());
	        	}
	        }
	    });		
	} else {
		$('#id_district').empty();
		$('#id_subdistrict').empty();
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
					$('#id_subdistrict').append($('<option></option>').val(data[i].id).html(data[i].name));
				});
				$('#city').val($('#id_subdistrict option:selected').text()+', '+$('#id_district option:selected').text()+', '+$('#id_state option:selected').text());
        	}
        }
    });
}