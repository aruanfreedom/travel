<section class="search-route" id="search-hotels-block">
        <div class="container">
            <div>
                <h2 class="title-page">Забронировать отель</h2>
                <div class="tabs-air">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <form class="content-search-travel">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="whence" tkey="country">Страна</label>
                                            <input type="text" class="form-control whence" id="country">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="where" tkey="city">Город</label>
                                            <input type="text" class="form-control where" id="city">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="start-date" tkey="end-date">Въезд</label>
                                            <input type="date" class="form-control start-date" id="start-date-hotels">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="end-date" tkey="start-date">Отъезд</label>
                                            <input type="date" class="form-control end-date" id="end-date-hotels">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="adulds" tkey="numbers">Номер</label>
                                            <input type="number" class="form-control" id="numbers" min="1" value="1">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <form class="content-search-travel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary btn-lg"
                                                id="search-hotels" data-toggle="modal" data-target="#myModal" tkey="search_hotels">Найти гостиницу
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
        <p class="status-message">Нет билетов с такими параметрами</p>
          <table class="table table-bordered result-search">
              <thead>
              <tr>
                  <th>Страна</th>
                  <th>Город</th>
                  <th>Въезд</th>
                  <th>Отъезд</th>
                  <th>Номер</th>
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
