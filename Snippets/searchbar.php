                    <div class="search-bar">
                        <div class="search-inner">
                           <form class="search-form" action="listings" autocomplete="off">
                              <div class="form-group">
                                 <input type="text" name="keyword" class="form-control" placeholder="What are you looking for ?">
                              </div>
                              <div class="form-group inputwithicon">
                                 <div class="select">
                                    <select name="city" required>
                                       <option value="all">All Cities</option>
                                       <?php
                                       try {
                                          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                                          $stmt = $conn->prepare("SELECT * FROM tbl_cities ORDER BY city");
                                          $stmt->execute();
                                          $result = $stmt->fetchAll();

                                          foreach ($result as $row) {
                                             print '<option value="' . $row['city'] . '">' . $row['city'] . '</option>';
                                          }
                                       } catch (PDOException $e) {
                                          echo "Connection failed: " . $e->getMessage();
                                       }

                                       ?>
                                    </select>
                                 </div>
                                 <i class="lni-target"></i>
                              </div>
                              <div class="form-group inputwithicon">
                                 <div class="select">
                                    <select name="category" required>
                                       <option value="all">All Categories</option>
                                       <?php
                                       try {
                                          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                                          $stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
                                          $stmt->execute();
                                          $result = $stmt->fetchAll();

                                          foreach ($result as $row) {
                                             print '<option value="' . $row['category'] . '">' . $row['category'] . '</option>';
                                          }
                                       } catch (PDOException $e) {
                                          echo "Connection failed: " . $e->getMessage();
                                       }

                                       ?>
                                    </select>
                                 </div>
                                 <i class="lni-menu"></i>
                              </div>
                              <button type="submit" name="search" value="✓" class="btn btn-common" type="button"><i class="lni-search"></i> Search Now</button>
                           </form>
                        </div>
                    </div>