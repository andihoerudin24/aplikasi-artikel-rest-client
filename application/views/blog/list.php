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
                <div class="panel-title">Data Artikel</div>

            </div>

            <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Artikel</th>
                        <th>Kategori</th>
                        <th>Foto</th>
                        <th>Aksi Edit</th>
                        <th>Aksi Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($blog as $row):
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->judul ?></td>
                            <td><?php echo $row->nama_kategori ?></td>
                            <td><img width="50" src="<?php echo base_url() ?>uploads/foto/<?php echo $row->foto ?>"  alt="image" /></td>
                            <td><?php echo anchor('Blog/edit/' . $row->id_post, 'Edit', array('class' => 'btn btn-danger')) ?></td>
                            <td><?php echo anchor('Blog/Delete/' . $row->id_post, 'Hapus', array('class' => 'btn btn-info')) ?></td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
            </table>

        </div>
    </div>

    <div class="col-md-3">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Tambah Artikel Klik Tambah</div>


                <?php echo anchor('Blog/add', 'Tamabah Artikel', array('class' => 'btn btn-success btn-sm"')) ?>
            </div>

        </div>

    </div>
</div>


