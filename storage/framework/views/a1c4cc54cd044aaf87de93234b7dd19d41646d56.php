<?php $__env->startSection('styles'); ?>

    <style>
        html, body {
            min-height: 100%;
        }

        body, div, form, input, select, textarea, label {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
            line-height: 22px;
        }

        h1 {
            position: absolute;
            margin: 0;
            font-size: 60px;
            color: #fff;
            z-index: 2;
            line-height: 83px;
            top: 30px;
        }

        legend {
            padding: 10px;
            font-family: Roboto, Arial, sans-serif;
            font-size: 18px;
            color: #fff;
            background-color: #0cb3f3;;
        }

        textarea {
            width: calc(100% - 12px);
            padding: 5px;
        }

        .testbox {
            display: flex;
            justify-content: center;
            align-items: center;
            height: inherit;
            padding: 20px;
            margin-top: 163px;
        }

        form {
            width: 100%;
            padding: 20px;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 0 8px black;
        }

        .banner {
            position: relative;
            height: 250px;
            background-image: url("<?php echo e(asset('/')); ?>frontend/image/Slider/SS booking cover.jpg");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        @media (max-width: 500px) {
            .mobilebanner {
                position: relative;
                height: 250px;
                background-image: url("<?php echo e(asset('/')); ?>frontend/image/Slider/Mobile.png");
                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .banner {
                display: none;
            }
        }

        .banner::after {
            content: "";

            position: absolute;
            width: 100%;
            height: 100%;
        }

        input, select, textarea {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input {
            width: calc(100% - 10px);
            padding: 5px;
        }

        input[type="date"] {
            padding: 4px 5px;
        }

        textarea {
            width: calc(100% - 12px);
            padding: 5px;
        }

        .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
            color: #006622;
        }

        .item input:hover, .item select:hover, .item textarea:hover {
            border: 1px solid transparent;
            box-shadow: 0 0 3px 0 #006622;
            color: #006622;
        }

        .item {
            position: relative;
            margin: 10px 0;
        }

        .item span {
            color: red;
        }

        .week {
            display: flex;
            justfiy-content: space-between;
        }

        .colums {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .colums div {
            width: 48%;
        }

        input[type=radio], input[type=checkbox] {
            display: none;
        }

        label.radio {
            position: relative;
            display: inline-block;
            margin: 5px 20px 15px 0;
            cursor: pointer;
        }

        .question span {
            margin-left: 30px;
        }

        .question-answer label {
            display: block;
        }

        label.radio:before {
            content: "";
            position: absolute;
            left: 0;
            width: 17px;
            height: 17px;
            border-radius: 50%;
            border: 2px solid #ccc;
        }

        input[type=radio]:checked + label:before, label.radio:hover:before {
            border: 2px solid #006622;
        }

        label.radio:after {
            content: "";
            position: absolute;
            top: 6px;
            left: 5px;
            width: 8px;
            height: 4px;
            border: 3px solid #006622;
            border-top: none;
            border-right: none;
            transform: rotate(-45deg);
            opacity: 0;
        }

        input[type=radio]:checked + label:after {
            opacity: 1;
        }

        .flax {
            display: flex;
            justify-content: space-around;
        }

        .btn-block {
            margin-top: 10px;
            text-align: center;
        }

        button {
            width: 150px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #0cb3f3;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background: black;
        }

        @media (min-width: 568px) {
            .name-item, .city-item {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .name-item input, .name-item div {
                width: calc(50% - 20px);
            }

            .name-item div input {
                width: 97%;
            }

            .name-item div label {
                display: block;
                padding-bottom: 5px;
            }
        }

        }
        .custom-map-control-button {
            background-color: #fff;
            border: 0;
            border-radius: 2px;
            box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
            margin: 10px;
            padding: 0 0.5em;
            font: 400 18px Roboto, Arial, sans-serif;
            overflow: hidden;
            height: 40px;
            cursor: pointer;
        }

        .custom-map-control-button:hover {
            background: #ebebeb;
        }
        .storeList::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        .storeList::-webkit-scrollbar-track {
            background: lightgray;
        }

        /* Handle */
        .storeList::-webkit-scrollbar-thumb {
            background: #0089bc;
        }

        /* Handle on hover */
        .storeList::-webkit-scrollbar-thumb:hover {
            background: #2957a9;
        }
    </style>
<?php $__env->stopSection(); ?>
<div class="container">
    <div class="testbox">
        <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form action="<?php echo e(url('savebooking')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <div class="banner">

            </div>
            <div class="mobilebanner"></div>
            <br/>
            <fieldset>
                <legend>Booking Form</legend>
                <p style="text-align:center;margin-top:10px;" id="selectedDe"><b>You are Selected<br>
                        Manufacturer:</b> <?php echo e($details->DeviceName); ?><br><b>Models:</b> <?php echo e($details->ModelName); ?>

                    <br><b>Issues:</b> <?php echo e($issue_name); ?> - $<?php echo e($issue_price); ?> </p>
                <div class="colums">
                    <div class="item hidden">
                        <label for="DeviceName">Device Name<span>*</span></label>
                        <input placeholder="Device Name" name="device" type="text" readonly required
                               value="<?php echo e($details->DeviceName); ?>"/>
                        <input placeholder="Device Name" name="deviceID" type="text" hidden
                               value="<?php echo e($details->device_id); ?>"/>
                    </div>
                    <div class="item hidden">
                        <label for="IssueName"> Issue Name<span>*</span></label>
                        <?php $__currentLoopData = $issues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><input type="text" name="issue" placeholder="Issue Name" readonly
                                                          required value=" <?php echo e($issue->issue_name); ?>"/>
                        <input type="text" name="issueID" placeholder="Issue Name" hidden readonly required
                               value=" <?php echo e($issue->id); ?>"/><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="item hidden">
                        <label for="model">Model Name<span>*</span></label>
                        <input type="text" name="model" placeholder="Model Name" readonly required
                               value="<?php echo e($details->ModelName); ?>"/>
                        <input type="text" name="modelID" placeholder="Model Name" hidden readonly required
                               value="<?php echo e($details->id); ?>"/>
                    </div>
                    <div class="item">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Your Name" value="" required/>
                    </div>
                    <div class="item">
                        <label for="number">Phone Number</label>
                        <input type="text" name="number" placeholder="Phone No" value="" required/>
                    </div>
                    <div class="item">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" placeholder="Email Address" value="" required/>
                    </div>
                    <input type="hidden" value="" id="store_email" name="store_email">
                    <div class="item">
                        <label for="email">Message</label>
                        <textarea type="text" name="message" placeholder="Other Detail" value=""></textarea>
                    </div>

                </div>
            </fieldset>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <label for="pac-input">Locate Store</label>
                        <input id="pac-input" class="form-control" type="text" placeholder="Enter Suburb or Post Code"/>
                        <section id="map" style="height:700px;"></section>
                    </div>
                    <div class="col-md-4 storeList" style="height: 700px;overflow-y: scroll;" id="mapDiv">

                    </div>
                </div>
            </div>
            <div class="btn-block">
                <button type="submit">Book Repair</button>
            </div>

        </form>
    </div>
</div>
<?php $__env->startSection('scripts'); ?>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUMoVX1-rpci7KMQ5P9ZZMIcIs7wM3FBI&callback=initAutocomplete&libraries=places&v=weekly"
        async></script>
    <script type="text/javascript">
        let value = {
            "type": "FeatureCollection",
            "features": [
                    <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                {
                    "geometry": {
                        "type": "Point",
                        "coordinates": [
                            <?php echo e($store->longitude); ?>, <?php echo e($store->latitude); ?>

                        ]
                    },
                    "type": "Feature",
                    "properties": {
                        "category": "Mobile Phone",
                        "hours": "<?php echo e($store->hours); ?>",
                        "description": "<?php echo e($store->description); ?>",
                        "name": "<?php echo e($store->name); ?>",
                        "phone": "<?php echo e($store->phone); ?>",
                        "storeid": "0<?php echo e($store->store_id); ?>"
                    }
                },
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ]
        };

        let values = {
            "features": [
                    <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                {
                    "properties": {
                        "description": "<?php echo e($store->description); ?>",
                        "name": "<?php echo e($store->name); ?>",
                        "phone": "<?php echo e($store->phone); ?>",
                        "email": "<?php echo e($store->email); ?>",
                        "latt": "<?php echo e($store->latitude); ?>",
                        "long": "<?php echo e($store->longitude); ?>",
                    }
                },
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ]
        };
        var infowindow;
        let latitude = '';
        let longitude = '';
        let map = '';


        $(document).ready(function () {

            $.each(values, function (key, val) {

                $.each(val, function (key, v) {
                    var id = Math.floor((Math.random() * 1000));

                    var html = '<div class="card card-body justify-content  " data-value="1" onclick="changeAddress(' + id + ')" style="cursor:pointer;" data-lat="' + v.properties.latt + '" data-long="' + v.properties.long + '">\n' +
                        '                    <h3>' + v.properties.name + '</h3><br>\n' +
                        '                    <p style="display:none;" id="addressLatitude' + id + '">' + v.properties.latt + '</p>\n' +
                        '                    <p style="display:none;" id="addressLogitude' + id + '">' + v.properties.long + '</p>\n' +
                        '                    <p style="display:none;" id="addressEmail' + id + '">' + v.properties.email + '</p>\n' +
                        '                    <p>' + v.properties.description + '</p>\n' +
                        '                    <i class="fa fa-phone">' + v.properties.phone + '</i>\n' +
                        '                  </div>';
                    $('#mapDiv').append(html);


                });

            });
        });


        function initAutocomplete() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: {lat: -33.8688, lng: 151.2195},
                zoom: 4,
                mapTypeId: "roadmap",
            });

            map.data.addGeoJson(value, {idPropertyName: 'storeid'});
            map.data.addListener('click', (event) => {
                const category = event.feature.getProperty('category');
                const name = event.feature.getProperty('name');
                const description = event.feature.getProperty('description');
                const hours = event.feature.getProperty('hours');
                const phone = event.feature.getProperty('phone');
                const position = event.feature.getGeometry().get();
                const content = `
                                  <h2 style="color:#FB5E24;">${name}</h2><p>${description}</p>
                                  <p><b>Open:</b> ${hours}<br/><b>Phone:</b> ${phone}</p>
                                `;


                infoWindow.setContent(content);
                infoWindow.setPosition(position);
                infoWindow.setOptions({pixelOffset: new google.maps.Size(100, 100)});
                infoWindow.open(map);
            });
            const infoWindow = new google.maps.InfoWindow();
            google.maps.event.addListener(map, 'click', function () {
                infowindow.close();
            });
            // Create the search box and link it to the UI element.
            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener("bounds_changed", () => {
                const abc = searchBox.setBounds(map.getBounds());
            });
            // let markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();
                if (places.length == 0) {
                    return;
                }
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();
                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }

                });
                map.fitBounds(bounds);
            });

        }

        function changeAddress(id) {
            latitude = '';
            longitude = '';
            storeEmail='';
            latitude = parseFloat($('#addressLatitude' + id).text());
            longitude = parseFloat($('#addressLogitude' + id).text());
            storeEmail = $('#addressEmail' + id).text();
            $('#store_email').val(storeEmail);

            map = new google.maps.Map(document.getElementById("map"), {
                center: {lat: latitude, lng: longitude},
                zoom: 15,
                mapTypeId: "roadmap",
            });

            marker = new google.maps.Marker({
                position: {lat: latitude, lng: longitude},
                map,
            });

            map.data.addGeoJson(value, {idPropertyName: 'storeid'});
            map.data.addListener('click', (event) => {
                const category = event.feature.getProperty('category');
                const name = event.feature.getProperty('name');
                const description = event.feature.getProperty('description');
                const hours = event.feature.getProperty('hours');
                const phone = event.feature.getProperty('phone');
                const position = event.feature.getGeometry().get();
                const content = `
                 <h2 style="color:#FB5E24;">${name}</h2><p>${description}</p>
                 <p><b>Open:</b> ${hours}<br/><b>Phone:</b> ${phone}</p>`;


                infoWindow.setContent(content);
                infoWindow.setPosition(position);
                infoWindow.setOptions({pixelOffset: new google.maps.Size(100, 100)});
                infoWindow.open(map);
            });
            const infoWindow = new google.maps.InfoWindow();
            google.maps.event.addListener(map, 'click', function () {
                infowindow.close();
            });
        }

        load_data('');
        function load_data(full_text_search_query = '')
        {
            var _token = $("input[name=_token]").val();
            $.ajax({
                url: '<?php echo e(url('store/search')); ?>',
                method:"POST",
                data:{full_text_search_query:full_text_search_query, _token:_token},
                dataType:"json",
                success:function(data)
                {
                    var html = '';
                    if(data.length > 0)
                    {
                        for(var count = 0; count < data.length; count++)
                        {
                             html += '<div class="card card-body justify-content  " data-value="1" onclick="changeAddress(' + data[count].id + ')" style="cursor:pointer;" data-lat="' + data[count].latitude + '" data-long="' + data[count].longitude + '">\n' +
                                '                    <h3>' + data[count].name + '</h3><br>\n' +
                                '                    <p style="display:none;" id="addressLatitude' + data[count].id + '">' + data[count].latitude + '</p>\n' +
                                '                    <p style="display:none;" id="addressLogitude' + data[count].id + '">' + data[count].longitude + '</p>\n' +
                                '                    <p style="display:none;" id="addressEmail' + data[count].id + '">' + data[count].email + '</p>\n' +
                                '                    <p>' + data[count].description + '</p>\n' +
                                '                    <i class="fa fa-phone">' + data[count].phone + '</i>\n' +
                                '                  </div>';
                        }
                    }
                    else
                    {
                        html += '<div class="card card-body justify-content  " >\n' +
                            '                    <h3>No Record Found</h3><br>\n' +
                            '                  </div>';
                    }
                    $('#mapDiv').html(html);
                }
            });
        }
        $('#pac-input').change(function () {
            var full_text_search_query = $('#pac-input').val();
            load_data(full_text_search_query);
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\focus\MobileRepairing\resources\views/Frontend/repairingform.blade.php ENDPATH**/ ?>