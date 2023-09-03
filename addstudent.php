<div class="card card-primary" id="addstudent">
    <div class="card-header">
        <h3 class="card-title">Student Bio Data</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="details">
        <div id="tab-0" class="show">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Other Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Other Name">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Gender</label>
                    <select class="custom-select bg-dark text-white" id="firstchoice">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="E.g muhdmuhd158@gmail.com">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Date of Birth</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="E.g 01-01-2000">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Religion</label>
                    <select class="custom-select bg-dark text-white" id="firstchoice">
                        <option value="">Select</option>
                        <option value="Islam">Islam</option>
                        <option value="Christiany">Religion</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <button type="submit" class="btn btn-success next" data-tab='1'>Next</button>
                </div>
            </div>
        </div>
        <div id="tab-1" class="hide">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="E.G Bauchi">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Local Government</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="E.G Misau">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contact Address</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Contact Address"></textarea>
</div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Home Address</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Home Address"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Blood Group</label>
                    <select class="custom-select bg-dark text-white" id="firstchoice">
                        <option value="">Select</option>
                        <option value="A+">A+</option>
                        <option value="AB">AB</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Disability</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="E.G Deaf">
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-success prev" data-tab='0'>Previous</button>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-success next" data-tab='2'>Next</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-2" class="hide">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Sponsor</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="E.G Parent">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Next of Kin Full Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Full name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Next of Kin Phone Number</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Relationship</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="E.G Brother">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Next of Kin Address</label>
                    <textarea type="text" class="form-control" id="exampleInputPassword1"></textarea>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-success prev" data-tab='1'>Previous</button>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-success submit" data-tab='3'>Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </form>
</div>