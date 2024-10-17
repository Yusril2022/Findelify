	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bx-desktop'></i>

			<span class="text">Findelify</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="/Pages">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="#">
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
			<li>
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
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Lost Item</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Item</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Lost</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<!-- List Item -->
				<li style="display: block; text-align: center; margin-bottom: 20px; cursor: pointer;" onclick="openModal()">
					<!-- Gambar barang di atas -->
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

				</li>

				<li style="display: block; text-align: center; margin-bottom: 20px; cursor: pointer;" onclick="openModal()">
					<!-- Item -->
					<div class="lost-item-card" onclick="openModal()">
						<!-- Gambar  -->
						<div class="image-container">
							<img src="/img/kucing.jpeg" alt="Lost Item" class="item-post">
						</div>

						<!-- Informasi -->
						<div class="text-container">
							<h3>Kucing Liar</h3>
							<p class="description">Description: Bulu belang Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, iste id sequi quidem consequuntur provident iusto! Reiciendis ullam nisi modi ex, in placeat odio, porro magnam laboriosam veniam ut at.</p>
							<p class="details"><strong>Date Lost:</strong> 12 October 2024</p>
							<p class="details"><strong>Location:</strong> Pasar Baru</p>
							<p class="details"><strong>Contact:</strong> 08188882881</p>
						</div>
					</div>

				</li>

				<li style="display: block; text-align: center; margin-bottom: 20px; cursor: pointer;" onclick="openModal()">
					<!-- Item -->
					<div class="lost-item-card" onclick="openModal()">
						<!-- Gambar -->
						<div class="image-container">
							<img src="/img/Kucing3.jpg" alt="Lost Item" class="item-post">
						</div>

						<!-- Informasi -->
						<div class="text-container">
							<h3>Kucing Kota</h3>
							<p class="description">Description: Bulu belang Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, iste id sequi quidem consequuntur provident iusto! Reiciendis ullam nisi modi ex, in placeat odio, porro magnam laboriosam veniam ut at.</p>
							<p class="details"><strong>Date Lost:</strong> 12 October 2024</p>
							<p class="details"><strong>Location:</strong> Pasar Baru</p>
							<p class="details"><strong>Contact:</strong> 08188882881</p>
						</div>
					</div>

				</li>

				<!-- Modal -->
				<div id="discussionModal" class="modal">
					<div class="modal-content">
						<span class="close" onclick="closeModal()">&times;</span>
						<h2>Kometar</h2>

						<!-- Komentar -->
						<div class="chat-container">
							<div class="message">
								<p><strong>Aku :</strong> Apakah ini kucing yang suka di Pasar Baru?</p>
							</div>
							<div class="message">
								<p><strong>Kamu :</strong> Ya, terakhir kali saya lihat di sana!</p>
							</div>
						</div>

						<div class="comment-section">
							<textarea placeholder="Ketik..." id="commentInput"></textarea>
							<button type="button" onclick="sendMessage()">Kirim</button>
						</div>
					</div>
				</div>
			</ul>

			<ul class="box-info">
				<!-- List Item -->
				<li style="display: block; text-align: center; margin-bottom: 20px; cursor: pointer;" onclick="openModal()">
					<!-- Gambar barang di atas -->
					<div class="lost-item-card" onclick="openModal()">
						<!-- Gambar barang di atas -->
						<div class="image-container">
							<img src="/img/kucing2.jpeg" alt="Lost Item">
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

				</li>

				<li style="display: block; text-align: center; margin-bottom: 20px; cursor: pointer;" onclick="openModal()">
					<!-- Item -->
					<div class="lost-item-card" onclick="openModal()">
						<!-- Gambar  -->
						<div class="image-container">
							<img src="/img/kucing.jpeg" alt="Lost Item">
						</div>

						<!-- Informasi -->
						<div class="text-container">
							<h3>Kucing Liar</h3>
							<p class="description">Description: Bulu belang Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, iste id sequi quidem consequuntur provident iusto! Reiciendis ullam nisi modi ex, in placeat odio, porro magnam laboriosam veniam ut at.</p>
							<p class="details"><strong>Date Lost:</strong> 12 October 2024</p>
							<p class="details"><strong>Location:</strong> Pasar Baru</p>
							<p class="details"><strong>Contact:</strong> 08188882881</p>
						</div>
					</div>

				</li>

				<li style="display: block; text-align: center; margin-bottom: 20px; cursor: pointer;" onclick="openModal()">
					<!-- Item -->
					<div class="lost-item-card" onclick="openModal()">
						<!-- Gambar -->
						<div class="image-container">
							<img src="/img/Kucing3.jpg" alt="Lost Item">
						</div>

						<!-- Informasi -->
						<div class="text-container">
							<h3>Kucing Kota</h3>
							<p class="description">Description: Bulu belang Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, iste id sequi quidem consequuntur provident iusto! Reiciendis ullam nisi modi ex, in placeat odio, porro magnam laboriosam veniam ut at.</p>
							<p class="details"><strong>Date Lost:</strong> 12 October 2024</p>
							<p class="details"><strong>Location:</strong> Pasar Baru</p>
							<p class="details"><strong>Contact:</strong> 08188882881</p>
						</div>
					</div>

				</li>

				<!-- Modal -->
				<div id="discussionModal" class="modal">
					<div class="modal-content">
						<span class="close" onclick="closeModal()">&times;</span>
						<h2>Kometar</h2>

						<!-- Komentar -->
						<div class="chat-container">
							<div class="message">
								<p><strong>Aku :</strong> Apakah ini kucing yang suka di Pasar Baru?</p>
							</div>
							<div class="message">
								<p><strong>Kamu :</strong> Ya, terakhir kali saya lihat di sana!</p>
							</div>
						</div>

						<div class="comment-section">
							<textarea placeholder="Ketik..." id="commentInput"></textarea>
							<button type="button" onclick="sendMessage()">Kirim</button>
						</div>
					</div>
				</div>
			</ul>

			<ul class="box-info">
				<!-- List Item -->
				<li style="display: block; text-align: center; margin-bottom: 20px; cursor: pointer;" onclick="openModal()">
					<!-- Gambar barang di atas -->
					<div class="lost-item-card" onclick="openModal()">
						<!-- Gambar barang di atas -->
						<div class="image-container">
							<img src="/img/kucing2.jpeg" alt="Lost Item">
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

				</li>

				<li style="display: block; text-align: center; margin-bottom: 20px; cursor: pointer;" onclick="openModal()">
					<!-- Item -->
					<div class="lost-item-card" onclick="openModal()">
						<!-- Gambar  -->
						<div class="image-container">
							<img src="/img/kucing.jpeg" alt="Lost Item">
						</div>

						<!-- Informasi -->
						<div class="text-container">
							<h3>Kucing Liar</h3>
							<p class="description">Description: Bulu belang Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, iste id sequi quidem consequuntur provident iusto! Reiciendis ullam nisi modi ex, in placeat odio, porro magnam laboriosam veniam ut at.</p>
							<p class="details"><strong>Date Lost:</strong> 12 October 2024</p>
							<p class="details"><strong>Location:</strong> Pasar Baru</p>
							<p class="details"><strong>Contact:</strong> 08188882881</p>
						</div>
					</div>

				</li>

				<li style="display: block; text-align: center; margin-bottom: 20px; cursor: pointer;" onclick="openModal()">
					<!-- Item -->
					<div class="lost-item-card" onclick="openModal()">
						<!-- Gambar -->
						<div class="image-container">
							<img src="/img/Kucing3.jpg" alt="Lost Item">
						</div>

						<!-- Informasi -->
						<div class="text-container">
							<h3>Kucing Kota</h3>
							<p class="description">Description: Bulu belang Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, iste id sequi quidem consequuntur provident iusto! Reiciendis ullam nisi modi ex, in placeat odio, porro magnam laboriosam veniam ut at.</p>
							<p class="details"><strong>Date Lost:</strong> 12 October 2024</p>
							<p class="details"><strong>Location:</strong> Pasar Baru</p>
							<p class="details"><strong>Contact:</strong> 08188882881</p>
						</div>
					</div>

				</li>

				<!-- Modal -->
				<div id="discussionModal" class="modal">
					<div class="modal-content">
						<span class="close" onclick="closeModal()">&times;</span>
						<h2>Kometar</h2>

						<!-- Komentar -->
						<div class="chat-container">
							<div class="message">
								<p><strong>Aku :</strong> Apakah ini kucing yang suka di Pasar Baru?</p>
							</div>
							<div class="message">
								<p><strong>Kamu :</strong> Ya, terakhir kali saya lihat di sana!</p>
							</div>
						</div>

						<div class="comment-section">
							<textarea placeholder="Ketik..." id="commentInput"></textarea>
							<button type="button" onclick="sendMessage()">Kirim</button>
						</div>
					</div>
				</div>
			</ul>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	