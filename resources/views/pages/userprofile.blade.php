@extends('layouts.pagesmain')


@section('content')
    <div class="user-profile-page">
        <div class="card radius-15">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-12 col-lg-7 border-right">
                        <div class="d-md-flex align-items-center">
                            <div class="mb-md-0 mb-3">
                                <img src="https://via.placeholder.com/110x110" class="rounded-circle shadow" width="130"
                                    height="130" alt="" />
                            </div>
                            <div class="ml-md-4 flex-grow-1">
                                <div class="d-flex align-items-center mb-1">
                                    <h4 class="mb-0">IGede Miarta Yasa, S.Kom</h4>
                                    <p class="mb-0 ml-auto">Rp 4000k</p>
                                </div>
                                <p class="text-primary fs-5"><i class='bx bx-buildings'></i> Karya Utama</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <table class="table table-sm table-borderless mt-md-0 mt-3">
                            <tbody>
                                <tr>
                                    <th>Job Role</th>
                                    <td>:</td>
                                    <td>IT Programmer <span class="badge badge-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Age</th>
                                    <td>:</td>
                                    <td>23</td>
                                </tr>
                                <tr>
                                    <th>Address:</th>
                                    <td>:</td>
                                    <td>Denpasar, Bali</td>
                                </tr>
                                <tr>
                                    <th>Years Join:</th>
                                    <td>:</td>
                                    <td>2021</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <!--end row-->
                <ul class="nav nav-pills">
                    <li class="nav-item"> <a class="nav-link active" id="profile-tab" data-toggle="tab"
                            href="#Biography"><span class="p-tab-name">Biography</span><i
                                class='bx bxs-user-rectangle font-24 d-sm-none'></i></a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Edit-Profile"><span
                                class="p-tab-name">Edit Profile</span><i
                                class='bx bx-message-edit font-24 d-sm-none'></i></a>
                    </li>
                </ul>
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="Biography">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card shadow-none border mb-0 mb-3">
                                    <div class="card-body">
                                        <h5 class="mb-3">Social Media</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <p class="mb-0"><i class="lni lni-facebook-filled"></i><a
                                                    href="javascript:;">svetlananyukova.com</a>
                                            </p>
                                        </li>
                                        <li class="list-group-item">
                                            <p class="mb-0"><i class="lni lni-instagram"></i> <a
                                                    href="javascript:;">blog.svetlananyukova.com</a>
                                            </p>
                                        </li>
                                        <li class="list-group-item">
                                            <p class="mb-1"><i class='lni lni-linkedin-original'></i> <a
                                                    href="javascript:;">svetlananyukova.com/portfolio</a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card shadow-none border mb-0 radius-15">
                                    <div class="card-body">
                                        <h5 class="mb-3">About</h5>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                            middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                                            predefined chunks as necessary, making this the first true generator on the
                                            Internet. It uses a dictionary of over 200 Latin words, combined with a handful
                                            of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Edit-Profile">
                        <div class="card shadow-none border mb-0 radius-15">
                            <div class="card-body">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-5 border-right">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Name</label>
                                                    <input type="text" name="nama" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Username</label>
                                                    <input type="text" name="username" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="handphone" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="alamat" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <select class="form-control" name="agama">
                                                    <option value="Budha">Budha</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-7">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Gender</label>
                                                    <select class="form-control">
                                                        <option value="L">Laki-laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Language</label>
                                                    <select class="form-control">
                                                        <option value="ina">Indonesia</option>
                                                        <option value="eng">English</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <p class="mb-0">Date of Birth</p>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <select class="form-control" name="mm">
                                                        <option value="01">January</option>
                                                        <option value="02">February</option>
                                                        <option value="03" selected>March</option>
                                                        <option value="04">April</option>
                                                        <option value="05">May</option>
                                                        <option value="06">June</option>
                                                        <option value="07">July</option>
                                                        <option value="08">August</option>
                                                        <option value="09">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <select class="form-control">
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                        <option>05</option>
                                                        <option>06</option>
                                                        <option>07</option>
                                                        <option>08</option>
                                                        <option>09</option>
                                                        <option selected>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                        <option>13</option>
                                                        <option>14</option>
                                                        <option>15</option>
                                                        <option>16</option>
                                                        <option>17</option>
                                                        <option>18</option>
                                                        <option>19</option>
                                                        <option>20</option>
                                                        <option>21</option>
                                                        <option>22</option>
                                                        <option>23</option>
                                                        <option>24</option>
                                                        <option>25</option>
                                                        <option>26</option>
                                                        <option>27</option>
                                                        <option>28</option>
                                                        <option>29</option>
                                                        <option>30</option>
                                                        <option>31</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <select class="form-control">
                                                        <option>1990</option>
                                                        <option>1991</option>
                                                        <option>1992</option>
                                                        <option selected>1993</option>
                                                        <option>1994</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Facebook</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Instagram</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Linked In</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <button class="btn btn-success" type="submit">Simpan</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
