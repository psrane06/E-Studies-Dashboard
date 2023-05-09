<x-layout>
    <div class="content">
        <div class="card w-75 mb-5">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="card-header pb-0">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Create a Course
                        </h2>
                    </div>
                    <div class="card-body px-5 pb-5 pt-0">
                        <h2 class="mb-4">Post a course</h2>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter Email">
                                <span class="mt-2 d-block">We'll never share your email with anyone else.</span>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlPassword">Password</label>
                                <input type="password" class="form-control" id="exampleFormControlPassword"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect12">Example select</label>
                                <select class="form-control" id="exampleFormControlSelect12">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControl2">Example multiple select</label>

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-footer mt-6">
                                <button type="submit" class="btn btn-primary btn-pill">Submit</button>
                                <button type="submit" class="btn btn-light btn-pill">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
