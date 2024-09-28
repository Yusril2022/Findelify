	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bx-desktop'></i>

			<span class="text">HiClub</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="/Pages">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="/userReport">
				<i class='bx bxs-user'></i>
					<span class="text">User Report</span>
				</a>
			</li>
			<li>
				<a href="/grupReport">
				<i class='bx bxs-group'></i>

					<span class="text">Grup Report</span>
				</a>
			</li>
			<li>
				<a href="talkReport">
				<i class='bx bxs-conversation'></i>
					<span class="text">Talk Report</span>
				</a>
			</li>
			<li  class="active">
				<a href="#">
				<i class='bx bxs-message-dots' ></i>
					<span class="text">Chat Report</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="/manageAccount">
					<i class='bx bxs-cog' ></i>
					<span class="text">Manage Account</span>
				</a>
			</li>
			<li>
				<a href="/" class="logout" id="logout-link">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
				
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="/img/people.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Chat Report</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Report</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Chat</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download Report</span>
				</a>
			</div>

			<!-- <ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>All Report</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Grup Report</p>
					</span>
				</li>
				<li>
				<i class='bx bxs-conversation'></i>
					<span class="text">
						<h3>2543</h3>
						<p>Talk Report</p>
					</span>
				</li>
			</ul> -->


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Report</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Date Report</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="/img/people.jpg">
									<p>Yusril</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="/img/people.jpg">
									<p>Yusril</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="/img/people.jpg">
									<p>Yusril</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="/img/people.jpg">
									<p>Yusril</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="/img/people.jpg">
									<p>Yusril</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	