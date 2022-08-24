import { h } from 'preact';
import { useState } from 'preact/hooks';

function ErrorText({error}) {
    return (
        <div className="text-red-700">{error}</div>
    );
}

export default function ContactForm({ action }) {
    let params = null;
    if (typeof window !== "undefined") {
        const urlSearchParams = new URLSearchParams(window.location.search);
        params = Object.fromEntries(urlSearchParams.entries());
    }

    const [validation, setValidation] = useState(false);

    const submit = async (event) => {
      event.preventDefault();
      const response = await fetch( action, { 
        method: 'POST', body: new FormData(event.target) 
      });
      const data = await response.json();
      setValidation(normalizeContactForm7Response(data));
    };
  
    const normalizeContactForm7Response = (response) => {
      // The other possible statuses are different kind of errors
      const isSuccess = response.status === 'mail_sent';
      // A message is provided for all statuses
      const message = response.message;
      const error = isSuccess
        ? {}
        : // We transform an array of objects into an object
          Object.fromEntries(
            response.invalid_fields.map((error) => {
              return [error.field, error.message];
            }),
          );
  
      return {
        isSuccess,
        message,
        error,
      };
    };
  
	return (
        <form method="post" onSubmit={submit} className="grid grid-cols-2 gap-4 my-12">
                <div>
                    <input type="text" name="fullname" placeholder="Name" className="w-full" />
                    { validation?.error?.fullname && 
                        <ErrorText error={validation?.error?.fullname} />
                    }
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email" className="w-full" />
                    { validation?.error?.email && 
                        <ErrorText error={validation?.error?.email} />
                    }
                </div>
                <div className="col-span-full">
                    <input type="text" name="service" placeholder="Service Inquiry" className="w-full" value={params?.service}/>
                </div>
                <div className="col-span-full">
                    <textarea rows="8" className="w-full" name="message" placeholder="Your Message"></textarea>
                    { validation?.error?.message && 
                        <ErrorText error={validation?.error?.message} />
                    }
                </div>
                <div className="text-center col-span-full">
                    {validation && (
                        <div className="border border-yellow-500 p-4 my-4">
                            {validation.message}
                        </div>
                    )}
                    <button className="bg-brand-action px-6 py-3 rounded-full min-w-[300px] text-white">Send</button>
                </div>
            </form>
	);
}