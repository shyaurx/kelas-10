import { useEffect, useState } from 'react';
import axios from 'axios';

export default function Projects() {
  const [projects, setProjects] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    axios.get('http://localhost:8000/api/projects')
      .then(res => {
        setProjects(res.data);
        setLoading(false);
      })
      .catch(err => {
        console.error(err);
        setLoading(false);
      });
  }, []);

  return (
    <div className="py-16">
      <div className="text-center mb-12">
        <h2 className="text-4xl font-bold text-gray-800">My Projects</h2>
        <p className="text-gray-500 mt-2">Here are some of my recent works</p>
      </div>

      {loading ? (
        <div className="flex justify-center"><div className="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600"></div></div>
      ) : projects.length === 0 ? (
        <p className="text-center text-gray-500">No projects to display yet.</p>
      ) : (
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {projects.map((p) => (
            <div key={p.id} className="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
              <div className="h-48 bg-gradient-to-r from-blue-100 to-purple-100 flex items-center justify-center">
                <span className="text-4xl">💻</span>
              </div>
              <div className="p-6 flex-grow">
                <h3 className="text-xl font-bold text-gray-800 mb-2">{p.title}</h3>
                <p className="text-gray-600 line-clamp-3">{p.description}</p>
              </div>
            </div>
          ))}
        </div>
      )}
    </div>
  );
}
