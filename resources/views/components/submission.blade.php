<section class="section" id="submit">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12  py-5 px-4 rounded">
                <div class="p-2 text-center rounded bg-primary ">
                    <h4 class="mb-0 text-white"> Form Upload Abstract</h4>
                </div>

                <div class="card mt-4 pt-2 rounded shadow border-0">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-5">Event Title</h4>
                        <!-- <p class="card-title">Submission for abstract has been closed </p> -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{route('submission')}}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label" for="full_name">Full Name</label>
                                <input class="form-control" type="text" id="full_name" name="full_name" placeholder="Enter your Name">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="emailaddress">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" name="email" placeholder="Enter your email">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input class="form-control" type="tel" id="phone" required name="phone" placeholder="Enter your Phone Number">
                            </div>
                            {{--<div class="form-group mb-3">
                                <label class="form-label" for="institution">Institution</label>
                                <input class="form-control" type="text" id="institution" required name="institution"
                                    placeholder="Enter your Institution">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="country">Country</label>
                                <select name="country" class="form-select" id="country">
                                    <option selected disabled>Select your country</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country['name'] }}">{{ $country['emoji'] }}
                            {{ $country['name'] }}
                            </option>
                            @endforeach
                            </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="abstractType">Abstract Type</label>
                        <select name="abstractType" class="form-select" id="abstractType">
                            <option selected disabled>Choose Type Abstract</option>
                            <option value="Free Paper">Free Paper</option>
                            <option value="Poster">Poster</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="title">Presentation Title</label>
                        <textarea class="form-control" id="title" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="file">Abstract</label>
                        <input class="form-control" accept="application/pdf, application/msword, .doc,.docx" type="file" id="file" required name="file" placeholder="Enter your Institution">
                    </div> --}}
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    <button class="btn btn-primary w-100 mt-3">Submit</button>
                    </form>
                    <p class="text-danger mt-4 mb-0"><i>*make sure the file conforms to the guidelines.</i></p>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    </div>
</section>