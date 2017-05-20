<section class="search-route">
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
                                            <label for="whence">Страна</label>
                                            <input type="text" class="form-control whence" id="country">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="where">Город</label>
                                            <input type="text" class="form-control where" id="city">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="start-date">Дата отправление</label>
                                            <input type="date" class="form-control start-date" id="start-date">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="end-date">Когда обратно</label>
                                            <input type="date" class="form-control end-date" id="end-date">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <form class="content-search-travel">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="adulds">Номер</label>
                                        <input type="number" class="form-control" id="numbers" min="1" value="1">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="childrens">Взрослые</label>
                                        <input type="number" class="form-control" id="adulds" min="1" value="1">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="childrens-two">Дети</label>
                                        <input type="number" min="0" value="0" class="form-control" id="childrens">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg"
                                                id="search-hotels" data-toggle="modal" data-target="#myModal">Найти гостиницу
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
        <h4 class="modal-title" id="myModalLabel">Результаты поиска</h4>
      </div>
      <div id="result" class="modal-body">
        <p>Нет билетов с такими параметрами</p>
          <table id="result-search" class="table table-bordered">
              <thead>
              <tr>
                  <th>Страна</th>
                  <th>Город</th>
                  <th>Дата отправление</th>
                  <th>Когда обратно</th>
                  <th>Номер</th>
                  <th>Действие</th>
              </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<?php include("profile-modal.php");?>
