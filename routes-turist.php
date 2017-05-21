<section class="dis1">
		  	<div class="container">
		  		<div class="row">
					<div class="col-md-8">
						<div class="hgroup">
							<h1 class="h1" tkey="search_router_site">Поиск туров по сайту</h1>
							<h2 class="h2" tkey="input_search_city">Введите в поиск название города</h2>
							<div class="input-group inpt-search-home">
							  <input type="text" class="form-control search-home-big model-turist">
							  <span class="input-group-btn">
								<button class="btn btn-primary search-routes-btn" type="button" data-toggle="modal" data-target="#myModal"><svg id="searck-btn" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.02 510.33"><defs><style>.cls-1{fill:#fff;}</style></defs><title>search</title><path class="cls-1" d="M501.3,454.4,367.6,320.7c23.9-33.4,38.2-74,38.2-117a202.9,202.9,0,1,0-202.9,203c43,0,83.5-14.3,117-38.2L453.6,502.2c11.9,11.9,33.4,11.9,47.7,0h0C515.6,487.8,515.6,468.7,501.3,454.4ZM202.9,358.9A155.2,155.2,0,1,1,358,203.8,154.9,154.9,0,0,1,202.9,358.9Z" transform="translate(0 -0.8)"/></svg></button>
							  </span>
							</div><!-- /input-group -->
						</div>
					</div>
              <div class="col-md-4">
                  <div>
                      <?php include("weather.php"); ?>
                  </div>
              </div>
		  		</div>
		  	</div>
		  </section>


 <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" tkey="result_search">Результаты поиска</h4>
      </div>
      <div id="result" class="modal-body result">
        <p class="status-message" tkey="not_parametres">Нет билетов с такими параметрами</p>
          <table class="table table-bordered result-search">
              <thead>
              <tr>
                  <th>Откуда</th>
                  <th>Куда</th>
                  <th>Въезд</th>
                  <th>Отъезд</th>
                  <th tkey="summa">Цена</th>
                  <th tkey="event">Действие</th>
              </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" tkey="close">Закрыть</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<?php include("profile-modal.php");?>