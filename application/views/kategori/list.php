<div class="row">
    <div class="col-md-9">
        <div class="content-box-large">
            <?php
            if ($this->session->flashdata('sukses')) {
                echo "<div class='alert alert-info'>";
                echo $this->session->flashdata('sukses');
                echo "</div>";
            } elseif ($this->session->flashdata('gagal')) {

                echo "<div class='alert alert-danger'>";
                echo $this->session->flashdata('gagal');
                echo "</div>";
            } elseif ($this->session->flashdata('salah')) {
                echo "<div class='alert alert-danger'>";
                echo $this->session->flashdata('salah');
                echo "</div>";
            } elseif ($this->session->flashdata('Hapus')) {
                echo "<div class='alert alert-danger'>";
                echo $this->session->flashdata('Hapus');
                echo "</div>";
            } elseif ($this->session->flashdata('cancel')) {
                echo "<div class='alert alert-danger'>";
                echo $this->session->flashdata('cancel');
                echo "</div>";
            }
            ?>   
            <div class="panel-heading">
                <div class="panel-title">Data Kategori</div>
             </div>
           <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Aksi Edit</th>
                        <th>Aksi Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($kategori as $row):
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->nama_kategori ?></td>
                            <td><?php echo anchor('Kategori/edit/' . $row->id, 'Edit', array('class' => 'btn btn-danger')) ?></td>
                            <td><?php echo anchor('Kategori/Delete/' . $row->id, 'Hapus', array('class' => 'btn btn-info')) ?></td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
            </table>

        </div>
    </div>

    <div class="col-md-3">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Tambah Kategori Klik Tambah</div>


                <?php echo anchor('Kategori/add', 'Tamabah Kategori', array('class' => 'btn btn-success btn-sm"')) ?>
            </div>

        </div>

    </div>
</div>


