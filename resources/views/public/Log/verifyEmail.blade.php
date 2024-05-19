@extends('layouts.base')
@section('content')
    <style>
        #countdown {
            display: none;
        }
    </style>
    <div class="container">
        <div class="form-box">
            <div class="form-tab">
                <ul class="nav nav-pills nav-fill" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab"
                            aria-controls="register-2" aria-selected="true">Nhập mã xác nhận email</a>
                    </li>
                </ul>
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if (session('errors'))
                    @foreach (session('errors') as $item)
                        <div class="alert alert-danger">{{ $item }}</div>
                    @endforeach
                @endif
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                        <form action="{{ route('email.verify') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="register-email-2">Mã xác nhận đã được gửi đến email của bạn *</label>
                                <input type="number" class="form-control" id="register-email-2" name="token" required>
                            </div><!-- End .form-group -->

                            <div class="Tpp3KH">
                                <div class="BKTQBD">Bạn vẫn chưa nhận được mã xác thực?</div>
                                <button id="sendTokenButton" onclick="startCountdown()" class="btn btn-outline-primary-2">
                                    <span>Gửi lại</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>
                                <div id="countdown">Có thể gửi lại trong 3s</div>
                            </div>


                            <div class="form-footer">
                                <button type="submit" class="btn btn-outline-primary-2">
                                    <span>CONTINUE</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>


                            </div><!-- End .form-footer -->
                        </form>
                    </div>
                </div>
            </div>

        </div>
        </form>
    </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->
    </div><!-- End .form-tab -->
    </div><!-- End .form-box -->
    </div>

    <script>
        document.getElementById('sendTokenButton').addEventListener('click', function(event) {
            event.preventDefault();
            startCountdown();
        });

        function startCountdown() {
            const button = document.getElementById('sendTokenButton');
            const countdown = document.getElementById('countdown');

            // Hide the button and show the countdown
            button.style.display = 'none';
            countdown.style.display = 'block';

            // Set initial countdown value
            let timeLeft = 60;
            countdown.innerText = "Có thể gửi lại trong " + timeLeft + "s";

            // Update the countdown every second
            const interval = setInterval(() => {
                timeLeft--;
                countdown.innerText = "Có thể gửi lại trong " + timeLeft + "s";

                if (timeLeft <= 0) {
                    // Time is up, stop the countdown and show the button again
                    clearInterval(interval);
                    countdown.style.display = 'none';
                    button.style.display = 'inline';
                }
            }, 1000);
        }
    </script>
@endsection
