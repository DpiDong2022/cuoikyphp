<x-admin.layout>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
                            </div>
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <form class="user" method="POST" action="">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username"
                                        placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password"
                                        placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password_confirmation" name="password_confirmation"
                                        placeholder="Repeat Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="roles">Choose a role:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="role_id" id="roleEmployee" value="1" required>
                                        <label class="form-check-label" for="roleAdmin">Admin</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="role_id" id="roleManager" value="2" required>
                                        <label class="form-check-label" for="roleUser">User</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Create Account
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</x-admin.layout>
