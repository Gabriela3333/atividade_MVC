@extends('index')
@section('conteudo')
        <div class="profile_container">
            <div class="profile_info">
                <div class="cart">
                        <div class="img">
                            <img src="/images/Diva.png" alt="">
                        </div>
                        <div class="info">
                            <p class="name">
                                Zineb_essoussi
                                <button class="edit_profile">
                                    Edit profile 
                                </button>
                            </p>
                            <div class="general_info">
                                <p><span>1</span> post</p>
                                <p><span>177</span> followers</p>
                                <p><span>137</span> following</p>
                            </div>
                            <p class="nick_name">Zin Ess</p>
                            <p class="desc">
                                I'am an engineering student <br>
                                ENSAO
                            </p>
                        </div>
                </div>
            </div>
            <div class="highlights">
                <div class="highlight">
                    <div class="img">
                        <img src="/images/lua.png" alt="">
                    </div>
                    <p>conseils</p>
                </div>
                <div class="highlight highlight_add">
                    <div class="img">
                        <img src="./images/plus.png" alt="">
                    </div>
                    <p>New</p>
                </div>
            </div>
            <hr>
            <div class="posts_profile">
                <ul class="nav-pills w-100 d-flex justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item mx-2" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            <img src="./images/feed.png" alt="posts">
                            POSTS
                        </button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <img src="./images/save-instagram.png" alt="saved posts">
                        SAVED
                      </button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                        <img src="./images/tagged.png" alt="tagged posts">
                        TAGGED
                      </button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div id="posts_sec" class="post">
                            <div class="item">
                                <img class="img-fluid item_img" src="https://i.pinimg.com/236x/85/6a/b5/856ab569b0989121074222851245ff0b.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid item_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWJcTjAu8-lRkZct6dUx_HAgQaNGft0OuF2A&s" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid item_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkOFo1CwiRaQD65x9pTD4g-6ktgYlwY9Bx4w&s" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid item_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPXUoVbfu6c4XImtHKSlcpciNIukipT1vTiQ&s" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid item_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC9UmyBwGE4DEsu8RH_jrLVgM4GSvIqH8l7A&s" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <div id="saved_sec" class="post">
                            <div class="item">
                                <img class="img-fluid item_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkDDyTmwXVoGwHEjcq4MefHTnx7EIymJB47A&s" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid item_img" src="https://conexaoplaneta.com.br/wp-content/uploads/2023/07/comedy-pet-abre-conexao-planeta-1024x708.jpg" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                        <div id="tagged" class="post">
                            <div class="item">
                                <img class="img-fluid item_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBuszF4684BBH1NcDO4X6ES7Hq-Q0gMGvl1A&s" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid item_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSozy-lf9YsPDY8WfXtqRl5KFybdf7fmqWLFA&s" alt="">
                            </div>
                        </div>
                    </div>
                    
                  </div>
            </div>
        </div>


        <!--Create model-->
        <div class="modal fade" id="create_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title w-100 fs-5 d-flex align-items-end justify-content-between"
                            id="exampleModalLabel">
                            <span class="title_create">Create new post</span>
                            <button class="next_btn_post btn_link"></button>
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="up_load" src="./images/upload.png" alt="upload">
                        <p>Drag photos and videos here</p>
                        <button class="btn btn-primary btn_upload">
                            select from your computer
                            <form id="upload-form">
                                <input class="input_select" type="file" id="image-upload" name="image-upload">
                            </form>
                        </button>
                        <div id="image-container" class="hide_img">
                        </div>
                        <div id="image_description" class="hide_img">
                            <div class="img_p"></div>
                            <div class="description">
                                <div class="cart">
                                    <div>
                                        <div class="img">
                                            <img src="./images/profile_img.jpg">
                                        </div>
                                        <div class="info">
                                            <p class="name">Zineb_essoussi</p>
                                        </div>
                                    </div>
                                </div>
                                <form>
                                    <textarea type="text" id="emoji_create" placeholder="write your email"></textarea>
                                </form>
                            </div>
                        </div>
                        <div class="post_published hide_img">
                            <img src="./images/uploaded_post.gif" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection