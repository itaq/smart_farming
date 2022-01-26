@extends('layouts.app-master')

@section('content')
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Services</h2>
                <hr class="divider" />
                <!-- <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p> -->
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <thead>
                    <!-- <tr>
                                <th class="text-center">Nama Alat</th>
                            </tr> -->
                </thead>
                <tbody>
                    @foreach ($services as $row)
                    @php
                    $status = $row->status == 'on' ? 'checked' : '';
                    @endphp
                    <td class="budget">
                        <div class="form-check form-switch">
                            <!-- <input data-id="{{$row->id}}" class="form-check-input" type="checkbox" data-toogle="toggle" data-on="Active" data-off="Inactive" {{$row->status == 'on' ? 'checked' : ''}}>
                            <label for="kelembaban">{{$row->nama_alat}}</label> -->
                            <input class="form-check-input" type="checkbox" data-id="{{ $row->id }}" {{ $status }}>
                            <label for="kelembaban">{{$row->nama_alat}}</label>
                        </div>
                        <!-- <input data-id="{{$row->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $row->status ? 'checked' : '' }}> -->
                        <!-- <input data-id="{{$row->id}}" class="form-check-input" type="checkbox" data-toogle="toggle" data-on="Active" data-off="Inactive" {{$row->status == 'on' ? 'checked' : ''}}> -->

                    </td>
                    @endforeach
                </tbody>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                    <!-- <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label for="kelembaban">Siram</label>
                            </div> -->
                    <!-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> -->
                    <!-- Submit Button-->
                    <!-- <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div> -->
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- Footer-->
<script>
    $(function() {
        $('.form-check-input').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            console.log(status)
            console.log(id)

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeStatus',
                data: {
                    'status': status,
                    'id': id
                },
                success: function(data) {
                    console.log(data.success)
                }
            });
        })
    })
</script>
</body>

</html>