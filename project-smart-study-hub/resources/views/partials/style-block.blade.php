<style>


.highlight-title {
  background: url('{{ asset('layouts/images/yellow.png') }}') no-repeat center;
  background-size: 80% 500%;
  background-position: 40px center; /* move 10px to the left */

}

@media (max-width: 576px) {
  .highlight-title {
    background-size: 80% 500%; /* slightly wider on mobile if needed */
  }
}


.subjects-header-section {
  position: relative;
  overflow: hidden;
  background: linear-gradient(120deg,
    rgba(37, 99, 235, 0.15),
    rgba(29, 78, 216, 0.15),
    rgba(20, 184, 166, 0.15)
  );
  background-size: 400% 400%;
  animation: waterFlow 18s ease infinite;
}

@keyframes waterFlow {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

.glass-header {
  max-width: 800px;
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  background: rgba(241, 245, 249, 0.15);
  border-radius: 20px;
  border: 1px solid rgba(255, 255, 255, 0.25);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  position: relative;
  z-index: 1;
}

.search-input {
  border: 2px solid rgba(29, 78, 216, 0.3);
  padding: 10px 15px;
  background: rgba(255, 255, 255, 0.7);
  border-radius: 50px 0 0 50px;
  transition: all 0.3s ease;
}

.search-input:focus {
  box-shadow: 0 0 14px rgba(20, 184, 166, 0.5);
  transform: scale(1.02);
}

.search-btn {
  border-radius: 0 50px 50px 0;
  padding: 10px 20px;
  background: var(--brand-700);
  color: white;
  transition: background 0.3s ease, transform 0.2s ease;
}

.search-btn:hover {
  background: var(--brand-800);
  transform: scale(1.05);
}

/* Floating icons wrapper */
.floating-icons-wrapper {
  position: absolute;
  top: 35%;
  left: 0;
  width: 200%;
  display: flex;
  z-index: 0;
  pointer-events: none;
}

/* Floating icons */
.floating-icons {
  display: flex;
  gap: 80px;
  font-size: 3.5rem;
  color: #111; /* dark soft black */
  white-space: nowrap;
  animation: floatRightLoop 50s linear infinite;
}

@keyframes floatRightLoop {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); } /* seamless loop */
}
</style>
