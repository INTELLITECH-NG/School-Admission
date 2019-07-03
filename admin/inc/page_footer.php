<?php
/**
 * page_footer.php
 *
 * Author: Ritedev Tech
 *
 * The footer of each page
 *
 */
?>
            <!-- Footer -->
            <footer class="clearfix">
                <div class="pull-right">
                    Developed <i class="fa fa-code text-warning"></i> by <a href="https://ritedev.com" target="_blank">Ritedev Tech</a>
                </div>
                <div class="pull-left">
                    <span id="year-copy"></span> &copy; <a href="https://ritedev.com" target="_blank"><?php echo $template['name'] . ' ' . $template['version']; ?></a>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
</div>
<!-- END Page Wrapper -->

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
<div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
            </div>
            <!-- END Modal Header -->

        </div>
    </div>
</div>
<!-- END User Settings -->
