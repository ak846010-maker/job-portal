<?php
include "../job_portal-gh_pages/componets/header.php";
?>

<?php
// Handle chatbot logic
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['message'])) {
    $userMessage = strtolower(trim($_POST['message']));
    $response = "🤖 Sorry, I didn’t quite understand that. Could you please rephrase your question about job opportunities?";

    // Responses
    if (preg_match('/(job|opening|vacancy|available)/', $userMessage)) {
        $response = "🎯 Here are our current job openings:\n\n" .
            "🧑‍💻 **Entry-Level (Freshers)**\n• Junior Web Developer\n• Content Writer Intern\n\n" .
            "👨‍🔧 **Mid-Level**\n• Web Developer (2+ yrs)\n• SEO Analyst\n\n" .
            "👨‍💼 **Senior-Level**\n• Project Manager\n• Senior UI/UX Designer\n\n" .
            "Would you like to know about qualifications or how to apply?";
    } elseif (preg_match('/(apply|application|how to apply)/', $userMessage)) {
        $response = "📝 You can apply directly by emailing your resume to:\n📧 careers@example.com\n\n" .
            "Or visit our application form:\n🔗 https://example.com/job-application\n\n" .
            "Would you like help improving your resume?";
    } elseif (preg_match('/(form|application form)/', $userMessage)) {
        $response = "🖊️ You can fill out our job application form at:\n🔗 https://example.com/job-application\n\nMake sure to upload your latest resume!";
    } elseif (preg_match('/(contact|email|phone|hr)/', $userMessage)) {
        $response = "📞 Contact our HR department:\n📧 hr@example.com\n📱 +123-456-7890\n🕘 Mon–Fri, 9 AM – 6 PM";
    } elseif (preg_match('/(hello|hi|hey)/', $userMessage)) {
        $response = "👋 Hello there! I'm **Fulambri Assistant**, your virtual job guide.\nYou can ask things like:\n• 'Which jobs are open?'\n• 'How do I apply?'\n• 'Contact HR'";
    } elseif (preg_match('/(thanks|thank you)/', $userMessage)) {
        $response = "😊 You're very welcome! I'm glad to help. Would you like interview or resume tips?";
    } elseif (preg_match('/(bye|goodbye|see you)/', $userMessage)) {
        $response = "👋 Goodbye! Wishing you great success in your job search!";
    } elseif (preg_match('/(qualification|skills|experience)/', $userMessage)) {
        $response = "📚 Job Requirements:\n\n✅ **Junior Roles**\n- Basic HTML/CSS/JS\n- Good communication skills\n- Passion for learning\n\n✅ **Senior Roles**\n- 3+ years of experience\n- Leadership & portfolio\n\nWould you like the detailed JD?";
    }

    echo nl2br($response);
    exit;
}
?>

<div class="overlay text-center text-white">
    <?php include "../job_portal-gh_pages/componets/navbar.php"; ?>

    <div class="h-100 d-flex justify-content-center align-items-center flex-column pb-5 hero-section">
        <h1 class="display-4 fw-bold mb-2">Fulambri Naukari Bank</h1>
        <p class="lead">Find Jobs, Careers, and Employment Opportunities</p>
        <a href="j.php" class="btn btn-light mt-3 shadow">🔍 Search Jobs</a>
    </div>
</div>

<!-- Floating Chat Button -->
<button id="chat-toggle" class="chat-toggle">💬</button>

<!-- Chatbot Window -->
<div id="chat-container" class="chat-container">
    <div class="chat-header">
        <strong>🤖 Fulambri Assistant</strong>
        <button id="chat-close" title="Close chat">×</button>
    </div>
    <div id="chat-box" class="chat-box"></div>
    <form id="chat-form" class="chat-form">
        <input type="text" id="user-input" placeholder="Ask about jobs..." required autocomplete="off">
        <button type="submit">Send</button>
    </form>
</div>

<style>
    /* 🌐 Global Page */
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        background: linear-gradient(135deg, #004aad, #007bff);
        color: #fff;
    }

    /* 🧭 Hero Section */
    .hero-section {
        height: 90vh;
        background: linear-gradient(135deg, rgba(0, 90, 255, 0.8), rgba(0, 150, 255, 0.8)),
            url('../images/job-bg.jpg') center/cover no-repeat;
    }

    /* 💬 Floating Button */
    .chat-toggle {
        position: fixed;
        bottom: 25px;
        right: 25px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: none;
        background: linear-gradient(135deg, #007bff, #00a2ff);
        color: #fff;
        font-size: 24px;
        cursor: pointer;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        z-index: 1000;
    }

    .chat-toggle:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 22px rgba(0, 0, 0, 0.3);
    }

    /* 💠 Chat Container */
    .chat-container {
        position: fixed;
        bottom: 100px;
        right: 25px;
        width: 340px;
        max-height: 500px;
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.25);
        border-radius: 18px;
        display: none;
        flex-direction: column;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        animation: fadeIn 0.4s ease;
        z-index: 999;
    }

    .chat-header {
        background: linear-gradient(135deg, #006eff, #0096ff);
        color: #fff;
        padding: 12px 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: bold;
    }

    .chat-header button {
        background: none;
        border: none;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
    }

    /* 💬 Messages */
    .chat-box {
        flex: 1;
        padding: 12px;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        gap: 10px;
        background: rgba(255, 255, 255, 0.1);
    }

    .message {
        padding: 10px 14px;
        border-radius: 16px;
        max-width: 80%;
        font-size: 14px;
        line-height: 1.4;
    }

    .message.user {
        background: #d0ebff;
        color: #003366;
        align-self: flex-end;
    }

    .message.bot {
        background: rgba(255, 255, 255, 0.85);
        color: #003366;
        align-self: flex-start;
    }

    /* 🧾 Input Area */
    .chat-form {
        display: flex;
        gap: 8px;
        padding: 10px;
        background: rgba(255, 255, 255, 0.95);
    }

    .chat-form input {
        flex: 1;
        padding: 10px;
        border-radius: 20px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    .chat-form button {
        background: #007bff;
        color: #fff;
        border: none;
        border-radius: 20px;
        padding: 0 16px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .chat-form button:hover {
        background: #0056b3;
    }

    /* 📱 Responsive */
    @media (max-width: 480px) {
        .chat-container {
            width: 90%;
            right: 5%;
            bottom: 80px;
        }
    }

    /* ✨ Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
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

    // Open Chat
    chatToggle.onclick = () => {
        chatContainer.style.display = 'flex';
        chatToggle.style.display = 'none';
    };

    // Close Chat
    chatClose.onclick = () => {
        chatContainer.style.display = 'none';
        chatToggle.style.display = 'block';
    };

    // Chat Functionality
    form.onsubmit = async (e) => {
        e.preventDefault();
        const userMessage = input.value.trim();
        if (!userMessage) return;

        // User bubble
        const userBubble = document.createElement('div');
        userBubble.className = 'message user';
        userBubble.textContent = userMessage;
        chatBox.appendChild(userBubble);
        input.value = '';
        chatBox.scrollTop = chatBox.scrollHeight;

        // Fetch bot response
        const res = await fetch('', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'message=' + encodeURIComponent(userMessage)
        });
        const botText = await res.text();

        // Bot bubble
        const botBubble = document.createElement('div');
        botBubble.className = 'message bot';
        botBubble.innerHTML = botText;
        chatBox.appendChild(botBubble);
        chatBox.scrollTop = chatBox.scrollHeight;
    };
</script>

<?php include "../job_portal-gh_pages/componets/footer.php"; ?>