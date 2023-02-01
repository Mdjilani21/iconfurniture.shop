    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

{{-- ajax search starts here --}}

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
        
            var availableTags = [];
            $.ajax({
                type: "GET",
                url: "/productList",

                success: function(response){
                    console.log(response);
                    startAutoComplete(response);
                }
            });

            function startAutoComplete(availableTags)
            {
                $("#searchProduct").autocomplete({
                source: availableTags
            });
            }
            
    </script>

{{-- ajax search ends here --}}

    {{-- district and upazila list get from CommonDropdownController --}}
    <script>
        $(document).ready(function() {
            //on load product page addCartButton disable
            $('#cartButton').prop('disabled', true);

            //get district list dependent on division dropdown
            $('#divisions_list').on('change', function() {
                var divisionId = this.value;
                $('#districts_list').html('');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
                    }
                });

                $.ajax({
                    url: '{{ route('getDistrictList') }}?division_id=' + divisionId,
                    type: 'get',
                    success: function(res) {
                        $('#districts_list').html('<option value="">Select District</option>');
                        $.each(res, function(key, value) {
                            $('#districts_list').append('<option value="' + value
                                .id + '">' + value.bn_name + '</option>');
                        });
                        $('#upazila_list').html('<option value="">Select Upazilla</option>');
                    }
                });
            });

            //get upazila list dependent on district dropdown
            $('#districts_list').on('change', function() {
                var districtId = this.value;
                // console.log(districtId);
                $('#upazila_list').html('');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
                    }
                });

                $.ajax({
                    url: '{{ route('getUpazilaList') }}?district_id=' + districtId,
                    type: 'get',
                    success: function(res) {
                        $('#upazila_list').html('<option value="">Select Upazilla</option>');
                        $.each(res, function(key, value) {
                            $('#upazila_list').append('<option value="' + value
                                .id + '">' + value.bn_name + '</option>');
                        });
                    }
                });
            });

            //on change upazila dropdown, addCartButton enabled
            $('#upazila_list').on('change', function() {
                if ($(this).val() !== "") {
                    $('#cartButton').prop('disabled', false);
                } else {
                    $('#cartButton').prop('disabled', true);
                }
            });
        });
    </script>

    </body>

    </html>
