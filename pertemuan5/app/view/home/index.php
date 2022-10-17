//view template
<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash();?>
    </div>
</div>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      <h2>Selamat datang, <?=!isset($data['company']) ?: $data['company']?></h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Kelas</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Alamat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Ni Putu Tarisa Normalia Dewi</td>
              <td>XII</td>
              <td>Rekayasa Perangkat Lunak</td>
              <td>Jl.Soka, br Angkeb Cangging, Perumahan Gulingan Residence, Gulingan, Mengwi, Badung</td>
            </tr>
            <tr>
            <td>1</td>
              <td>Ni Putu Tarisa Normalia Dewi</td>
              <td>XII</td>
              <td>Rekayasa Perangkat Lunak</td>
              <td>Jl.Soka, br Angkeb Cangging, Perumahan Gulingan Residence, Gulingan, Mengwi, Badung</td>
            </tr>
            <td>1</td>
              <td>Ni Putu Tarisa Normalia Dewi</td>
              <td>XII</td>
              <td>Rekayasa Perangkat Lunak</td>
              <td>Jl.Soka, br Angkeb Cangging, Perumahan Gulingan Residence, Gulingan, Mengwi, Badung</td>
            </tr>
            <td>1</td>
              <td>Ni Putu Tarisa Normalia Dewi</td>
              <td>XII</td>
              <td>Rekayasa Perangkat Lunak</td>
              <td>Jl.Soka, br Angkeb Cangging, Perumahan Gulingan Residence, Gulingan, Mengwi, Badung</td>
            </tr>
            <td>1</td>
              <td>Ni Putu Tarisa Normalia Dewi</td>
              <td>XII</td>
              <td>Rekayasa Perangkat Lunak</td>
              <td>Jl.Soka, br Angkeb Cangging, Perumahan Gulingan Residence, Gulingan, Mengwi, Badung</td>
            </tr>
            <td>1</td>
              <td>Ni Putu Tarisa Normalia Dewi</td>
              <td>XII</td>
              <td>Rekayasa Perangkat Lunak</td>
              <td>Jl.Soka, br Angkeb Cangging, Perumahan Gulingan Residence, Gulingan, Mengwi, Badung</td>
            </tr>
            <td>1</td>
              <td>Ni Putu Tarisa Normalia Dewi</td>
              <td>XII</td>
              <td>Rekayasa Perangkat Lunak</td>
              <td>Jl.Soka, br Angkeb Cangging, Perumahan Gulingan Residence, Gulingan, Mengwi, Badung</td>
            </tr>
            <td>1</td>
              <td>Ni Putu Tarisa Normalia Dewi</td>
              <td>XII</td>
              <td>Rekayasa Perangkat Lunak</td>
              <td>Jl.Soka, br Angkeb Cangging, Perumahan Gulingan Residence, Gulingan, Mengwi, Badung</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>text</td>
              <td>placeholder</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>visual</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>random</td>
              <td>tabular</td>
              <td>information</td>
              <td>text</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>