import { useState, useEffect } from 'react';
import axios from 'axios';

export default function AdminDashboard() {
  const [title, setTitle] = useState('');
  const [description, setDescription] = useState('');
  const [messages, setMessages] = useState([]);
  const [activeTab, setActiveTab] = useState('projects');
  const token = localStorage.getItem('token');

  useEffect(() => {
    if (activeTab === 'messages') {
      axios.get('http://localhost:8000/api/messages', {
        headers: { Authorization: `Bearer ${token}` }
      }).then(res => setMessages(res.data))
        .catch(err => console.error(err));
    }
  }, [activeTab, token]);

  const handleCreateProject = async (e) => {
    e.preventDefault();
    try {
      await axios.post('http://localhost:8000/api/projects', 
        { title, description },
        { headers: { Authorization: `Bearer ${token}` } }
      );
      alert('Project successfully created!');
      setTitle(''); setDescription('');
    } catch (error) {
      console.error('Error creating project', error);
      alert('Failed to create project');
    }
  };

  return (
    <div className="py-10 max-w-5xl mx-auto px-4">
      <div className="flex justify-between items-center mb-8">
        <h2 className="text-3xl font-bold text-gray-800">Admin Dashboard</h2>
        <div className="flex gap-2">
          <button onClick={() => setActiveTab('projects')} className={`px-4 py-2 rounded-lg font-medium transition ${activeTab === 'projects' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'}`}>Manage Projects</button>
          <button onClick={() => setActiveTab('messages')} className={`px-4 py-2 rounded-lg font-medium transition ${activeTab === 'messages' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'}`}>Inbox</button>
        </div>
      </div>

      {activeTab === 'projects' && (
        <div className="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
          <h3 className="text-xl font-bold mb-6 text-gray-800 border-b pb-2">Add New Project</h3>
          <form onSubmit={handleCreateProject} className="flex flex-col gap-5">
            <div>
              <label className="block text-gray-700 mb-2 font-medium">Project Title</label>
              <input type="text" required
                className="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value={title} onChange={e => setTitle(e.target.value)} />
            </div>
            <div>
              <label className="block text-gray-700 mb-2 font-medium">Project Description</label>
              <textarea required rows="4"
                className="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value={description} onChange={e => setDescription(e.target.value)} />
            </div>
            <button className="bg-green-600 text-white py-2 px-6 rounded-lg font-semibold hover:bg-green-700 transition self-start">
              Save Project
            </button>
          </form>
        </div>
      )}

      {activeTab === 'messages' && (
        <div className="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
          <h3 className="text-xl font-bold mb-6 text-gray-800 border-b pb-2">Messages Inbox</h3>
          {messages.length === 0 ? (
            <p className="text-gray-500">No messages yet.</p>
          ) : (
            <div className="flex flex-col gap-4">
              {messages.map(m => (
                <div key={m.id} className="p-4 border rounded-lg bg-gray-50">
                  <div className="flex justify-between items-start mb-2">
                    <h4 className="font-bold text-gray-800">{m.name}</h4>
                    <span className="text-sm text-gray-500">{new Date(m.created_at).toLocaleDateString()}</span>
                  </div>
                  <p className="text-blue-600 text-sm mb-3">{m.email}</p>
                  <p className="text-gray-700 bg-white p-3 border rounded">{m.message}</p>
                </div>
              ))}
            </div>
          )}
        </div>
      )}
    </div>
  );
}
