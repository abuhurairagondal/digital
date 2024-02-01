<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.header_links')
    <title>Reset Password</title>
</head>
<body class="sub_page">
    @include('include.header')

    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Reset Password</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-2" style="border: 2px solid #000000; border-radius: 10px">
                    <h2 style="height: 50px; color: #000000; margin-top: 40px;" align="center"><strong>Reset Password</strong></h2>
                    {{-- Include your success and error messages --}}
                    @include('include.success')

                    {{-- Reset password form --}}
                    <form action="{{ route('password.update') }}" method="POST" style="margin-top: 60px;" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="email" value="{{ $email }}">

                        <div class="col-md-12 col-sm-12 mb-3">
                            <label class="mb-1"><b>New Password</b> <code>*</code></label>
                            <input type="password" placeholder="New Password" name="password" required />
                        </div>

                        <div class="col-md-12 col-sm-12 mb-3">
                            <label class="mb-1"><b>Confirm Password</b> <code>*</code></label>
                            <input type="password" placeholder="Confirm Password" name="password_confirmation" required />
                        </div>

                        <div class="col-md-12 col-sm-12 mb-3" style="text-align: center;">
                            <div class="form-group">
                                <input type="submit" value="Reset Password" class="btn btn-primary">
                            </div>
                        </div>

                    </form>
                </div>

                <div class="col-md-6">
                    <img src="/images/logo.png" style="height: 300px; margin-left: 200px; margin-top: 100px;">
                </div>
            </div>
        </div>
    </section>

    @include('include.footer')
    @include('include.footer_links')

</body>
</html>
