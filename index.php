<?php
include "../job_portal-gh_pages/componets/header.php";
?>

<?php
// Handle chatbot response
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['message'])) {
  $userMessage = strtolower(trim($_POST['message']));
  $response = "I'm sorry, I didn’t understand your question about job opportunities. Can you please rephrase or be more specific?";

  // JOB OPENINGS
  if (
    strpos($userMessage, 'job') !== false ||
    strpos($userMessage, 'opening') !== false ||
    strpos($userMessage, 'vacancy') !== false ||
    strpos($userMessage, 'available') !== false
  ) {
    $response = "🎯 We currently have the following job openings:\n\n" .
      "🧑‍💻 **Entry-Level (Freshers)**\n" .
      "• Junior Web Developer\n" .
      "• Content Writer Intern\n\n" .
      "👨‍🔧 **Mid-Level**\n" .
      "• Web Developer (2+ yrs)\n" .
      "• SEO Analyst\n\n" .
      "👨‍💼 **Senior-Level**\n" .
      "• Project Manager\n" .
      "• Senior UI/UX Designer\n\n" .
      "Would you like to know about qualifications or how to apply?";
  } elseif (
    strpos($userMessage, 'apply') !== false ||
    strpos($userMessage, 'application') !== false ||
    strpos($userMessage, 'how to apply') !== false
  ) {
    $response = "📝 To apply, please email your resume and portfolio (if any) to:\n📧 careers@example.com\n\n" .
      "You can also use our application form here:\n🔗 https://example.com/job-application\n\n" .
      "Would you like tips on creating a strong resume?";
  } elseif (strpos($userMessage, 'form') !== false) {
    $response = "🖊️ You can fill out the job application form directly at:\n🔗 https://example.com/job-application\n\n" .
      "Make sure to upload your updated resume. Need help writing a cover letter?";
  } elseif (
    strpos($userMessage, 'contact') !== false ||
    strpos($userMessage, 'email') !== false ||
    strpos($userMessage, 'phone') !== false ||
    strpos($userMessage, 'hr') !== false
  ) {
    $response = "📞 You can contact our HR department for job queries at:\n\n" .
      "📧 hr@example.com\n📱 +123-456-7890\n" .
      "Available Mon–Fri, 9 AM to 6 PM.";
  } elseif (strpos($userMessage, 'hello') !== false || strpos($userMessage, 'hi') !== false || strpos($userMessage, 'hey') !== false) {
    $response = "👋 Hello! I'm your job assistant bot. I can help you with job openings, how to apply, and more.\nTry asking:\n• \"Which jobs are open?\"\n• \"How can I apply?\"\n• \"Contact HR\"";
  } elseif (strpos($userMessage, 'thanks') !== false || strpos($userMessage, 'thank you') !== false) {
    $response = "😊 You're very welcome! Let me know if you want help with applications, resume tips, or interviews.";
  } elseif (strpos($userMessage, 'bye') !== false || strpos($userMessage, 'goodbye') !== false) {
    $response = "👋 Goodbye! Best of luck with your job search. Hope to hear from you soon!";
  } elseif (
    strpos($userMessage, 'qualification') !== false ||
    strpos($userMessage, 'skills') !== false ||
    strpos($userMessage, 'experience') !== false
  ) {
    $response = "📚 Requirements vary by role:\n\n" .
      "✅ For Junior Roles:\n- Basic HTML/CSS/JS knowledge\n- Good communication\n- Willingness to learn\n\n" .
      "✅ For Senior Roles:\n- 3+ years of experience\n- Strong portfolio\n- Project/team management\n\nWould you like a detailed JD?";
  }

  echo nl2br($response);
  exit;
}
?>

<div class="overlay">
  <!-- navbar  -->
  <?php include "../job_portal-gh_pages/componets/navbar.php"; ?>

  <div class="h-100 d-flex justify-content-center align-items-center flex-column pb-5">
    <h1>Fulambri Naukari Bank</h1>
    <p>Find Jobs, Careers and Employment</p>
    <div class="btn-wrap py-3">
      <a href="j.php">Search Job</a>
    </div>
  </div>
</div>

<!-- Chatbot Widget -->
<!-- <div class="chat-container" style="position: fixed; bottom: 20px; right: 20px; z-index: 999;">
    <div id="chat-box"></div>
    <form id="chat-form">
        <input type="text" id="user-input" placeholder="Ask about job openings..." required autocomplete="off">
        <button type="submit" title="Click to send your message">Send</button>
    </form>
</div> -->


/* <!-- Floating Chat Button --> */
<button id="chat-toggle" class="chat-toggle">🤖</button>

<!-- Chatbot Container -->
<div id="chat-container" class="chat-container">
  <div class="chat-header">
    <strong>🖥️Fulambri Assistant</strong>
    <button id="chat-close" title="Close chat">×</button>
  </div>
  <div id="chat-box" class="chat-box"></div>
  <form id="chat-form" class="chat-form">
    <input type="text" id="user-input" placeholder="Ask me for jobs..." required autocomplete="off">
    <button type="submit">Send</button>
  </form>
</div>

<style>
  /* Toggle Button */
  .chat-toggle {
    position: fixed;
    bottom: 25px;
    right: 25px;
    width: 55px;
    height: 55px;
    border: none;
    border-radius: 50%;
    background-color: #007bff;
    color: #fff;
    font-size: 24px;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    z-index: 9999;
  }

  /* Chat Container */
  .chat-container {
    position: fixed;
    bottom: 95px;
    right: 25px;
    width: 320px;
    max-height: 480px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    display: none;
    flex-direction: column;
    overflow: hidden;
    z-index: 9998;
  }

  .chat-header {
    background: #007bff;
    color: white;
    padding: 12px 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 16px;
  }

  .chat-header button {
    background: none;
    border: none;
    font-size: 18px;
    color: white;
    cursor: pointer;
  }

  .chat-box {
    flex: 1;
    padding: 12px;
    overflow-y: auto;
    background: #f1f3f5;
    font-size: 14px;
  }

  .message {
    margin: 8px 0;
    padding: 10px 14px;
    border-radius: 18px;
    max-width: 80%;
    word-wrap: break-word;
  }

  .message.user {
    background-color: #d0ebff;
    align-self: flex-end;
    text-align: right;
    margin-left: auto;
  }

  .message.bot {
    background-color: #e9ecef;
    align-self: flex-start;
    text-align: left;
    margin-right: auto;
  }

  .chat-form {
    display: flex;
    padding: 10px;
    border-top: 1px solid #ddd;
    background: #fff;
  }

  .chat-form input[type="text"] {
    flex: 1;
    padding: 10px;
    border-radius: 20px;
    border: 1px solid #ccc;
    font-size: 14px;
    outline: none;
  }

  .chat-form button {
    margin-left: 10px;
    padding: 0 16px;
    background: #007bff;
    color: white;
    border: none;
    border-radius: 20px;
    cursor: pointer;
  }

  .chat-form button:hover {
    background: #0056b3;
  }

  @media (max-width: 480px) {
    .chat-container {
      width: 90%;
      bottom: 80px;
      right: 5%;
    }
  }
</style>

<script>
  const chatToggle = document.getElementById('chat-toggle');
  const chatContainer = document.getElementById('chat-container');
  const chatClose = document.getElementById('chat-close');
  const form = document.getElementById('chat-form');
  const input = document.getElementById('user-input');
  const chatBox = document.getElementById('chat-box');

  // Toggle open/close
  chatToggle.onclick = () => {
    chatContainer.style.display = 'flex';
    chatToggle.style.display = 'none';
  };

  chatClose.onclick = () => {
    chatContainer.style.display = 'none';
    chatToggle.style.display = 'inline-block';
  };

  // Chat submission
  form.onsubmit = async (e) => {
    e.preventDefault();
    const userMessage = input.value.trim();
    // console.log("TEST", userMessage)
    if (!userMessage) return;

    // Show user's message
    const userBubble = document.createElement('div');
    userBubble.className = 'message user';
    userBubble.textContent = userMessage;
    chatBox.appendChild(userBubble);
    input.value = '';
    chatBox.scrollTop = chatBox.scrollHeight;

    // Send request to PHP
    const res = await fetch('', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: 'message=' + encodeURIComponent(userMessage)
    });

    const botText = await res.text();

    // Show bot response
    const botBubble = document.createElement('div');
    botBubble.className = 'message bot';
    botBubble.innerHTML = botText;
    chatBox.appendChild(botBubble);
    chatBox.scrollTop = chatBox.scrollHeight;
  };
</script>

</script>

<?php
include "../job_portal-gh_pages/componets/footer.php";
?>