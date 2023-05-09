<div class="container-xxl">
    <div class="row align-items-center">
        <div class="card">
            <div class="card-header text-center text-white font-weight-bold" style="background-color: black;">
                <h4><?= $auth['name'] ?></h4>
            </div>
            <div class="card-body">
                <!-- Row end  -->
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12  col-xl-12 col-lg-1 text-center mt-4 mb-4 ">
                                <img src="<?= $auth['photo'] ? $auth['photo']  : 'img/default-avatar.png' ?>" class="img-thumbnail" alt="..." style="max-width: 120px;    border-radius: 2.25rem;">
                            </div>
                            <div class="col-md-12 col-sm-12  col-xl-12 col-lg-7 mt-4 mb-4 ">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row flex-wrap align-items-center mb-3 mt-2 ">
                                            <div class="me-3 me-md-5">
                                                <div class="fw-bold mb-0">Staff No</div>
                                                <div class="mb-0 "><?= $auth['staffno'] ?></div>
                                            </div>
                                            <div class="me-3 me-md-5">
                                                <div class="fw-bold mb-0">IC No</div>
                                                <div class="mb-0 "><?= $auth['icno'] ?></div>
                                            </div>
                                            <div class="me-3 me-md-5">
                                                <div class="fw-bold mb-0">Position</div>
                                                <div class="mb-0 "><?= $auth['position'] ?></div>
                                            </div>
                                            <div class="me-3 me-md-5">
                                                <div class="fw-bold mb-0">Department</div>
                                                <div class="mb-0 "><?= $auth['department'] ?></div>
                                            </div>
                                            <div class="me-3 me-md-5">
                                                <div class="fw-bold mb-0">Mobile No</div>
                                                <div class="mb-0 "><?= $auth['phone'] ?></div>
                                            </div>
                                            <div class="me-3 me-md-5">
                                                <div class="fw-bold mb-0">Office No</div>
                                                <div class="mb-0 "><?= $auth['office'] ?></div>
                                            </div>
                                            <div class="me-3 me-md-5">
                                                <div class="fw-bold mb-0">Email Address</div>
                                                <div class="mb-0 "><?= $auth['email'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12  col-xl-12 col-lg-4 text-left  mt-4 mb-4 ">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="fw-bold mb-0">Address</div>
                                        <div class="mb-0 "><?= $auth['add1'] ?> <br /><?= $auth['add2'] ?> <?= $auth['add3'] ?>, <?= $auth['postcode'] ?> <?= $auth['city'] ?>, <?= $auth['state'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row align-items-center mt-4 ">
        <div class="col-lg-6 col-xl-12">
            <div class="card">
                <div class="card-header text-center text-white font-weight-bold" style="background-color: black;">
                    <h4>Vaccination Info</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-sm text-center">
                                <tr>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Vaccine</th>
                                    <th>Batch</th>
                                    <th>PPV</th>
                                </tr>
                                <?php
                                if ($results['date_d1'] != null && $results['date_d1'] != '') {
                                ?>
                                    <tr>
                                        <td>Dose 1</td>
                                        <td><?= $results['date_d1'] ?></td>
                                        <td><?= $results['vaksin_d1'] ?></td>
                                        <td><?= $results['batch_d1'] ?></td>
                                        <td><?= $results['ppv_d1'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <?php
                                if ($results['date_d2'] != null && $results['date_d2'] != '') {
                                ?>
                                    <tr>
                                        <td>Dose 2</td>
                                        <td><?= $results['date_d2'] ?></td>
                                        <td><?= $results['vaksin_d2'] ?></td>
                                        <td><?= $results['batch_d2'] ?></td>
                                        <td><?= $results['ppv_d2'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <?php
                                if ($results['date_d3'] != null && $results['date_d3'] != '') {
                                ?>
                                    <tr>
                                        <td>Dose 3</td>
                                        <td><?= $results['date_d3'] ?></td>
                                        <td><?= $results['vaksin_d3'] ?></td>
                                        <td><?= $results['batch_d3'] ?></td>
                                        <td><?= $results['ppv_d3'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <?php
                                if ($results['booster_date'] != null && $results['booster_date'] != '') {
                                ?>
                                    <tr>
                                        <td>1<sup>st</sup> Booster</td>
                                        <td><?= $results['booster_date'] ?></td>
                                        <td><?= $results['booster_vaksin'] ?></td>
                                        <td><?= $results['booster_batch'] ?></td>
                                        <td><?= $results['booster_ppv'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <?php
                                if ($results['booster2_date'] != null && $results['booster2_date'] != '') {
                                ?>
                                    <tr>
                                        <td>2<sup>nd</sup> Booster</td>
                                        <td><?= $results['booster2_date'] ?></td>
                                        <td><?= $results['booster2_vaksin'] ?></td>
                                        <td><?= $results['booster2_batch'] ?></td>
                                        <td><?= $results['booster2_ppv'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <?php
                                if ($results['in_date'] != null && $results['in_date'] != '') {
                                ?>
                                    <tr>
                                        <td>Dose 2022</td>
                                        <td><?= $results['in_date'] ?></td>
                                        <td>INFLUENZA</td>
                                        <td>-</td>
                                        <td>Institut Jantung Negara</td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <?php foreach ($hepb as $item) : ?>
                                    <tr>
                                        <td>-</td>
                                        <td><?= $item['date'] ?></td>
                                        <td>HEPATITIS B</td>
                                        <td>-</td>
                                        <td>Institut Jantung Negara</td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-12">
            <div class="card">
                <div class="card-header text-center text-white font-weight-bold" style="background-color: black;">
                    <h4>CPR Training Info</h4>
                </div>
                <div class="card-body">
                    <table class="table table-sm text-center">
                        <tr>
                            <th style="padding-right: 55px;" class="text-center">BLS Date</th>
                            <th style="padding-right: 55px;" class="text-center">Expiry Date</th>
                            <th style="padding-right: 55px;" class="text-center">ACLS Date</th>
                            <th style="padding-right: 55px;" class="text-center">Expiry Date</th>
                            <th style="padding-right: 55px;" class="text-center">PALS Date</th>
                            <th style="padding-right: 55px;" class="text-center">Expiry Date</th>
                        </tr>
                        <tr>
                            <td class="text-center"><?= $training['bls_date'] ?></td>
                            <td class="text-center <?= $training['bls_expired'] == 'expired' ? 'bg-danger text-white' : '' ?>"><?= $training['bls_expiry'] ?></td>
                            <td class="text-center"><?= $training['acls_date'] ?><?= ($training['acls_date'] == 'Not Applicable') ? "<br/>" . $training['aclsdate'] : '' ?></td>
                            <td class="text-center <?= $training['acls_expired'] == 'expired' ? 'bg-danger text-white' : '' ?>"><?= $training['acls_expiry'] ?><?= ($training['acls_expiry'] == 'Not Applicable') ? "<br/>" . $training['aclsexpirydate'] : '' ?></td>
                            <td class="text-center"><?= $training['pals_date'] ?><?= ($training['palsdate'] == 'Not Applicable') ? "<br/>" . $training['palsdate'] : '' ?></td>
                            <td class="text-center <?= $training['pals_expired'] == 'expired' ? 'bg-danger text-white' : '' ?>"><?= $training['pals_expiry'] ?><?= ($training['pals_expiry'] == 'Not Applicable') ? "<br/>" . $training['palsexpirydate'] : '' ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>