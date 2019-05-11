<!DOCTYPE html>
<html>
<head>
  <title>user</title>
<th> No </th>
 
         <th> Nama </th>
          <th> Alamat </th>
          <th> Pekerjaan</th>
           <th> Umur </th>
          <th> Jenis Kelamin </th>
         <th> Aksi </th>
 
 
    </tr>
    
        <tr>
          <td><?php echo"$no.";?></td>
          <td><?php echo"$r[nama].";?></td>
          <td><?php echo"$r[alamat].";?></td>
          <td><?php echo"$r[pekerjaan].";?></td>
          <td><?php echo"$r[umur].";?></td>
          <td><?php echo"$r[jk].";?></td>
          <td align="center"> 
            <a  href="?halaman=pasien_edit&id=<?php echo"$r[nama]";?>"title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
          </tr>
          <?php
          $no++;

          } ?>
               
</table>
 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
    
        <footer>
          <div class="pull-right">
          </div>
          <div class="clearfix"></div>
        </footer>

      </div>
    </div>

  
    <script src="vendors/jquery/dist/jquery.min.js"></script>
  
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  
    <script src="vendors/fastclick/lib/fastclick.js"></script>
  
    <script src="vendors/nprogress/nprogress.js"></script>

    <script src="build/js/custom.min.js"></script>
  </body>
</free>
</table>
</div>
</html>

</head>
<body>

</body>
</html>

         