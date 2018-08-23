<nav class="navbar  w3-navbar-expand-lg w3-navbar-dark w3-white">
			<?php if (isset($_SESSION['email'])) { ?>
				<li class="nav-item <?php if ($page == 'account') { echo 'active'; } ?>">
					<a class="nav-link" href="account.php">Account</a>
				</li>
				<?php if (isset($_SESSION['company_id'])) { ?>
					<li class="nav-item <?php if ($page == 'transaction') { echo 'active'; } ?>">
						<a class="nav-link" href="transaction.php">New transaction</a>
					</li>
				<?php } ?>
			<?php } else { ?>
				<li class="nav-item <?php if ($page == 'sign_in') { echo 'active'; } ?>">
					<a class="nav-link" href="sign_in.php">Sign in</a>
				</li>
			<?php } ?>
		</ul>
		<?php if (isset($_SESSION['email'])) { ?>
			<a href="/api/sign_out.php" class="btn btn-outline-light">Sign out</a>
		<?php } ?>
	</div>
</nav>
