    <!--Cards-->
    <div class="container" id="cards">
      <div class="row">
        <div class="col card1">
          <div class="card mb-3" style="width: 400px; height: 17rem;">
            <div class="row">
              <div class="col">
                <img src="img/fundo_card.jpg" class="img-fluid rounded-start" style="height: 17rem;" alt="...">
              </div>
              <div class="col">
                <div class="row">
                  <div class="card-body">
                    <h4 class="card-title m-3">Novidades</h4>
                    <p class="card-text m-3">Subscreva todas as nossas novidades.</p>
                  </div>
                </div>
                <!--formulario-->


                <form action="db/dbInsertEmail.php" method="post">
                  <div class="row m-1" style="padding-right: 20px;">
                    <input type="email" class="form-control" id="subscrever-email" name="subscrever-email" placeHolder="           Email">

                  </div>
                  <div button="row" style="padding-right: 60px; padding-left:40px; padding-top: 10px;">
                    <button type="submit" class="btn btn-primary">Subscrever</button>
                  </div>
                  <div id="erro"></div>
                </form>



              </div>
            </div>
          </div>
        </div>
        <div class="col card2">
          <div class="card mb-1" style="width: 400px;  height: 17rem;">
            <div class="row g-0">
              <div class="col-md-10">

              </div>
              <div class="col-md-20">
                <div class="card-body">
                  <h4 class="card-title" style="padding: 30px;">Siga-nos nas Redes Sociais</h4>
                  <br>
                  <br>
                  <br>
                  <div class="row iconesCard">
                    <div class="col ">
                      <a class="nav-link" href="https://www.facebook.com" target="_blank"><img src="icons/facebook.ico" width="30px" alt=""></a>
                    </div>
                    <div class="col ">
                      <a class="nav-link" href="https://www.instagram.com" target="_blank"><img src="icons/instagram.ico" width="30px" alt=""></a>
                    </div>
                    <div class="col ">
                      <a class="nav-link" href="https://www.tiktok.com" target="_blank"><img src="icons/tiktok.ico" width="30px" alt=""></a>
                    </div>
                    <div class="col ">
                      <a class="nav-link" href="https://www.twitter.com" target="_blank"><img src="icons/twitter.ico" width="30px" alt=""></a>
                    </div>

                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>