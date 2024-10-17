	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bx-desktop'></i>

			<span class="text">Findelify</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="/Pages">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="/lostItem">
					<i class='bx bx-search-alt'></i>
					<span class="text">Lost Item</span>
				</a>
			</li>
			<li>
				<a href="/foundItem">
					<i class='bx bx-box'></i>
					<span class="text">Found Item</span>
				</a>
			</li>
		</ul>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<ul class="side-menu">
			<li class="active">
				<a href="/manageAccount">
					<img src="/img/people.jpg" alt="Profile Image" class="profile-pic">
					<div style="display: flex; flex-direction: column;">
						<span class="text">Yusril Mubaroq</span>
						<span class="role">Karawang</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/" class="logout" id="logout-link">
					<i class='bx bxs-log-out-circle'></i>
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
			<i class='bx bx-menu'></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
				<span class="num">8</span>
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="profile-container">
				<div class="profile-section">
					<div class="profile-header">
						<img src="/img/people.jpg" alt="Profile Picture" class="profile-user">
						<div class="user-info">
							<h1>Yusril Mubaroq</h1>
							<p>Karawang</p>
						</div>
						<div class="user-stats">
							<div class="stat-item">Lost Item <br> <strong>8</strong></div>
							<div class="stat-item">Found Item <br> <strong>0</strong></div>
							<div class="stat-item">Followers <br> <strong>20</strong></div>
						</div>
					</div>

					<div class="buttons">
						<button class="btn lost">Lost</button>
						<button class="btn found">Found</button>
						<button class="btn add"><i class='bx bx-user-plus' style="font-size: 24px;"></i></button>
						<button class="btn edit-profile">Edit Profile</button>
					</div>

					<div class="post-grid">
						<div class="lost-item-card" onclick="openModal()">
							<!-- Gambar barang di atas -->
							<div class="image-container">
								<img src="/img/kucing2.jpeg" alt="Lost Item" class="item-post">
							</div>

							<!-- Informasi barang di bawah -->
							<div class="text-container">
								<h3>Kucing Pasar</h3>
								<p class="description">Description: Bulu belang Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, iste id sequi quidem consequuntur provident iusto! Reiciendis ullam nisi modi ex, in placeat odio, porro magnam laboriosam veniam ut at.</p>
								<p class="details"><strong>Date Lost:</strong> 12 October 2024</p>
								<p class="details"><strong>Location:</strong> Pasar Baru</p>
								<p class="details"><strong>Contact:</strong> 08188882881</p>
							</div>
						</div>
						<div class="lost-item-card" onclick="openModal()">
							<!-- Gambar barang di atas -->
							<div class="image-container">
								<img src="/img/kucing2.jpeg" alt="Lost Item" class="item-post">
							</div>

							<!-- Informasi barang di bawah -->
							<div class="text-container">
								<h3>Kucing Pasar</h3>
								<p class="description">Description: Bulu belang Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, iste id sequi quidem consequuntur provident iusto! Reiciendis ullam nisi modi ex, in placeat odio, porro magnam laboriosam veniam ut at.</p>
								<p class="details"><strong>Date Lost:</strong> 12 October 2024</p>
								<p class="details"><strong>Location:</strong> Pasar Baru</p>
								<p class="details"><strong>Contact:</strong> 08188882881</p>
							</div>
						</div>


						<div class="lost-item-card" onclick="openModal()">
							<!-- Gambar barang di atas -->
							<div class="image-container">
								<img src="/img/kucing2.jpeg" alt="Lost Item" class="item-post">
							</div>

							<!-- Informasi barang di bawah -->
							<div class="text-container">
								<h3>Kucing Pasar</h3>
								<p class="description">Description: Bulu belang Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, iste id sequi quidem consequuntur provident iusto! Reiciendis ullam nisi modi ex, in placeat odio, porro magnam laboriosam veniam ut at.</p>
								<p class="details"><strong>Date Lost:</strong> 12 October 2024</p>
								<p class="details"><strong>Location:</strong> Pasar Baru</p>
								<p class="details"><strong>Contact:</strong> 08188882881</p>
							</div>
						</div>
					</div>
				</div>
			</div>


		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->