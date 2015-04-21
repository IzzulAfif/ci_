<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Untitled Document</title>
        <style>
            #tab1 {
                border-left: solid 1px black;
                border-top: solid 1px black;
                border-spacing:0;
                border-collapse: collapse;
            }
            #tab1 td {
                border-right: solid 1px black;
                border-bottom: solid 1px black;
            }
            td{
                font-family: Arial;
                font-size: 12pt;
            }
        </style>
    </head>

    <body>

        <table width="40%" border="0" cellspacing="0" cellpadding="0" align="left">        
            <tr>
                <TD>&nbsp;&nbsp;&nbsp;</TD>
                <td style="border-bottom:1px solid black; padding-bottom: 4px" align="center"><?php echo $header_1; ?><br> <?php echo $header_2; ?></td>
            </tr>

        </table>
        <table  width="37%" border="0" cellspacing="0" cellpadding="0" align="right">
            <tr>
                <td align="left">Lampiran <?php echo $nama_lampiran; ?></td>
            </tr>
            <tr>
                <td align="left">Mabes TNI Tahun <?php echo $tahun ?></td>
            </tr>
            <tr>
                <td style="border-bottom:1px solid black; padding-bottom: 4px;" align="left">Tanggal <?php echo $tanggal ?></td>
                <TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</TD>
            </tr>
        </table>
        <br />
        <br />
        <!--        <br />
                <br />
                <br />-->
        <table width="100%" align="left" border="0" cellspacing="0" cellpadding="0" >
            <tr>
                <td style="text-align:center;"><b>PENGUKURAN KINERJA KEGIATAN (PKK)<BR />TAHUN ANGGARAN 2011</b></td>
            </tr>
        </table>
        <br />
        <br />
        <br />
        <table width="100%" align="left" border="0" cellspacing="0" cellpadding="0" >
            <tr>
                <td style="text-align:left;">INSTANSI : PUSINFOLAHTA TNI</td>
            </tr>
        </table>
        <br>
            <br>
                <table width="100%" cellpadding="0" cellspacing="0" border="0" id="tab1" repeated_header="1" >
                    <tr>
                        <td style="border: 1px solid black; text-align: center; padding: 10px"><b>NO</b></td>
                        <td style="border: 1px solid black; text-align: center;  padding: 10px;"><b>SASARAN STRATEGIS</b></td>
                        <td style="border: 1px solid black; text-align: center;  padding: 10px;"><b>INDIKATOR SASARAN</b></td>
                        <td style="border: 1px solid black; text-align: center;  padding: 10px;"><b>TARGET</b></td>
                        <td style="border: 1px solid black; text-align: center;  padding: 10px;"><b>REALISASI</b></td>
                        <td style="border: 1px solid black; text-align: center;  padding: 10px;"><b>%</b></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align: center;padding-top: 1px; padding-bottom: 1px">1</td>
                        <td style="border: 1px solid black; text-align: center;padding-top: 1px; padding-bottom: 1px">2</td>
                        <td style="border: 1px solid black; text-align: center;padding-top: 1px; padding-bottom: 1px">3</td>
                        <td style="border: 1px solid black; text-align: center;padding-top: 1px; padding-bottom: 1px">4</td>
                        <td style="border: 1px solid black; text-align: center;padding-top: 1px; padding-bottom: 1px">5</td>
                        <td style="border: 1px solid black; text-align: center;padding-top: 1px; padding-bottom: 1px">6</td>
                    </tr>
                    <?php foreach ($data->result() as $value) { ?>
                        <tr>
                            <td width="10%" style="text-align:left; padding: 10px; vertical-align: top"><?php echo $value->uraian ?></td>
                            <td width="20%" style="text-align:left; padding: 10px; vertical-align: top"><?php echo $value->indikator ?></td>
                            <td width="20%" style="text-align:left; padding: 10px; vertical-align: top"><?php echo $value->target ?></td>
                            <td width="20%" style="text-align:left; padding: 10px; vertical-align: top"><?php echo $value->realisasi ?></td>
                            <td width="20%" style="text-align:left; padding: 10px; vertical-align: top"><?php echo $value->capaian ?></td>
                        </tr>
                    <?php } ?>

                </table>
                <br>
                    <br>
                        <table align="right" width="30%" cellpadding="0" cellspacing="0" border="0" >
                            <tr>
                                <td style="text-align: center;"><?php echo $jabatan ?></td>
                            </tr>
                            <tr>
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                            </tr>
                            <tr>
                                <td style="text-align: center;"><?php echo $nama ?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;"><?php echo $pangkat ?> NRP <?php echo $nrp ?> </td>
                            </tr>
                        </table>
                        <br>			
                            </body>
                            </html>