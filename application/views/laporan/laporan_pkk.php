<div class="span12">
    <div class="widget widget-nopad">
        <div class="widget-header"> <i class="icon-list-alt"></i>
            <h3> CETAK LAPORAN</h3>
        </div>
        <div class="widget-content">
            <div class="widget big-stats-container">
                <div class="widget-content">
                    <table id="Unit" class="table table-striped table-bordered table-hover table-full-width">
                        <thead>
                            <tr>
                                <th style="text-align: center; padding: 20px">NO</th>
                                <th style="text-align: center; padding: 20px">SASARAN STRATEGIS</th>
                                <th style="text-align: center; padding: 20px">INDIKATOR SASARAN</th>
                                <th style="text-align: center; padding: 20px">TARGET</th>
                                <th style="text-align: center; padding: 20px">REALISASI</th>
                                <th style="text-align: center; padding: 20px">%</th>
                            </tr>
                            <tr>
                                <th style="text-align: center">1</th>
                                <th style="text-align: center">2</th>
                                <th style="text-align: center">3</th>
                                <th style="text-align: center">4</th>
                                <th style="text-align: center">5</th>
                                <th style="text-align: center">6</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data->result() as $row) {

                                echo '<tr>';
                                echo '	<td>' . $no . '</td>';
                                echo '	<td>' . $row->uraian . '</td>';
                                echo '	<td>' . $row->indikator . '</td>';
                                echo '	<td>' . $row->target . '</td>';
                                echo '	<td>' . $row->realisasi . '</td>';
                                echo '	<td>' . $row->capaian . '</td>';
                                echo '	</tr>';
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <br>
                    <form class="form-horizontal" id="formAddmenu" target="someFrame" action="<?php echo site_url('laporan/cetak_pkk'); ?>" method="post">
                        <div class="modal-body">
                            <div class="span6">
                                <div class="control-group">											
                                    <label class="control-label" for="parent">HEADER I</label>
                                    <div class="controls">
                                        <input type="text" name="header_1" placeholder="Contoh: MARKAS BESAR TENTARA NASIONAL INDONESIA">
                                    </div>		
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">											
                                    <label class="control-label" for="parent">HEADER II</label>
                                    <div class="controls">
                                        <input type="text" name="header_2" placeholder="Contoh: DETASEMEN MARKAS">
                                    </div>		
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">											
                                    <label class="control-label" for="urutan">NAMA LAMPIRAN</label>
                                    <div class="controls">
                                        <input type="text" name="nama_lampiran" placeholder="NAMA LAMPIRAN">
                                    </div>											
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">											
                                    <label class="control-label" for="url">TAHUN</label>
                                    <div class="controls">
                                        <select name="tahun">
                                            <option value="" selected="selected">------------Pilih Tahun------------</option>
                                            <?php foreach ($tahun->result() as $tahun_res) { ?>
                                                <option value="<?php echo $tahun_res->tahun; ?>"><?php echo $tahun_res->tahun; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>			
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">											
                                    <label class="control-label" for="url">TANGGAL</label>
                                    <div class="controls">
                                        <input type="text" name="tanggal" placeholder="Contoh: 1 Januari 2015">
                                    </div>			
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">											
                                    <label class="control-label" for="urutan">NAMA</label>
                                    <div class="controls">
                                        <input type="text" name="nama_ttd" placeholder="NAMA">
                                    </div>											
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">											
                                    <label class="control-label" for="url">JABATAN</label>
                                    <div class="controls">
                                        <input type="text" name="jabatan" placeholder="JABATAN">
                                    </div>			
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">											
                                    <label class="control-label" for="urutan">PANGKAT</label>
                                    <div class="controls">
                                        <input type="text" name="pangkat" placeholder="PANGKAT">
                                    </div>											
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">											
                                    <label class="control-label" for="urutan">NRP</label>
                                    <div class="controls">
                                        <input type="text" name="nrp" placeholder="NRP">
                                    </div>											
                                </div>
                            </div>
                            <br>
                            <br>
                        </div>

                        <div class="span6">
                            <div class="control-group">											
                                <div class="controls">
                                    <a href="#" class="btn print-preview">Output Preview</a>
                                    <a href="<?php echo site_url('laporan/cetak_pkk_download') ?>" class="btn btn-primary">Save</a>
                                </div>
                            </div>
                        </div>
                    </form>

                    <script>
                        $('a.print-preview').click(function () {
                            $('#formAddmenu').submit();
                            $('#print_preview').fadeIn(1000);
                            return false;
                        });
                    </script>

                    <div style="display:none;" id="print_preview">
                        <iframe width="100%" height="720px" name="someFrame" id="someFrame"> </iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#Unit').DataTable();
    })

</script>